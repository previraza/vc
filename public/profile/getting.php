<?php $error_response = "Une erreur s'est produit pendant l'envoie de cette requette...";
$table = 'snem'; if(isset($_POST['anacad']) && is_numeric($_POST['anacad'])) $table .= "_$_POST[anacad]";
function return_mailler(string $message){ ?>
<div class=half-bg></div>
<div class=page>
    <div class=page-content>
        <div class=lmpixels-arrows-nav>
            <div class="lmpixels-arrow-left close" id="close-modal-profile"><i class="fa fa-times fw-lighter fa-2x"></i></div>
        </div>
        <div class=content-area>
            <div class=animated-sections>
                <section data-id=resume class="animated-section section-active">
                    <div class=section-content>
                        <div class=page-title>
                            <h2>Profile Estudiantin</h2>
                            <h4>Section / Option / Niiveau</h4>
                        </div>
                        <div class=row>
                            <div class="col-xs-12 col-sm-12">
                                <div class='block-title border-bottom w-100'>
                                    <h3><?=$message?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php  }

// MCISME
// $error_response = "Le profile séléctionner sont en attente de délibération";
if (isset($_POST['id'], $_POST['opt'], $_POST['level'], $_POST['promo'])) {
    require_once "../../app/settings/params/connect";
    if($_POST['id']){
        $error_response = "L'identifiant séléctionner est indisponible pour l'instant...";
        $get_std = $db_poo->query("SELECT students.id, sections.id AS sec_id, students.key, students.gender, students.class AS class_id, students.profile, students.phone, students.email, classes.finished, classes.promotion AS promo, classes.delib, classes.modify, CONCAT(students.firstname, ' ', students.lastname) AS name, classes.name AS class, sections.name AS section, options.name AS option, level.name AS level, level.system AS `system` FROM $table.students JOIN $table.classes ON classes.id = students.class JOIN $table.sections ON sections.id = classes.section JOIN $table.options ON options.id = classes.option JOIN $table.level ON level.id = classes.level WHERE (students.key = '$_POST[id]') AND students.credit > 3 AND students.active = 1 AND students.delete = 0 AND students.valide = 1");
        if($get_std->num_rows && $user = $get_std->fetch_object()){
            if($user->delib == 1) $error_response = '<h1>En attente de la fin de la délibération !</h1>';
            else if($user->modify == 1) $error_response = '<h1>En attente de la fin du traitement de la delibération !</h1>';
            else{
                $error_response = "Le profile séléctionner est momentatement indisponible pour l'instant !";
                $get_cotes = $db_poo->query("SELECT DISTINCT courses.id, courses.part, courses.name, courses.credit, cotes.* FROM $table.courses LEFT JOIN $table.cotes ON (cotes.course = courses.id AND cotes.student = $user->id AND cotes.active = 1) WHERE courses.class = $user->class_id AND courses.active = 1 AND courses.delete = 0");
                $proof_profile = ($get_cotes->num_rows) ? 'one' : false;
            }
        } $this_class = ($user??false) ? "$user->section / $user->option / $user->level / $user->class" : '';
    } elseif($_POST['opt'] && $_POST['level'] && $_POST['promo']){
        if(is_numeric($_POST['opt']) && is_numeric($_POST['level']) && is_numeric($_POST['promo'])){
            $error_response = "Les informations de la classe séléctionner sont indisponible pour l'instant...";
            $get_std_class = $db_poo->query("SELECT students.id, sections.id AS sec_id, students.key, students.gender, students.class AS class_id, students.profile, students.phone, students.email, classes.finished, classes.promotion AS promo, classes.delib, CONCAT(students.firstname, ' ', students.lastname) AS name, classes.name AS class, sections.name AS section, options.name AS option, level.name AS level FROM $table.students JOIN $table.classes ON classes.id = students.class JOIN $table.sections ON sections.id = classes.section JOIN $table.options ON options.id = classes.option JOIN $table.level ON level.id = classes.level WHERE students.credit > 3 AND students.active = 1 AND students.delete = 0 AND students.valide = 1 AND classes.option = $_POST[opt] AND classes.promotion = $_POST[promo] AND classes.level = $_POST[level]");
            $std_infos = []; while($user = $get_std_class->fetch_object()){
                $error_response = "Le profile séléctionner sont en attente de délibération";
                $this_class = "$user->section / $user->option / $user->level / $user->class";
                $this_promo = $user->promo;
                $std_infos[$user->id]['data'] = $user;
                $std_infos[$user->id]['cotes'] = $db_poo->query("SELECT DISTINCT courses.id, courses.part, courses.name, courses.credit, cotes.* FROM $table.courses LEFT JOIN $table.cotes ON (cotes.course = courses.id AND cotes.student = $user->id AND cotes.active = 1) WHERE courses.class = $user->class_id AND courses.active = 1 AND courses.delete = 0");
            } $proof_profile = count($std_infos) ? 'multi' : false;
        } else $error_response = "Reference de classe incorrecte...";
    } else $error_response = "Veuillez renseigner les informations de votre recherche...";
}
if (isset($proof_profile)) { if ($proof_profile == 'one') {  // ONE RESULT 
    $res_sec_sem = $res_pre_sem = $fres_sec_sem = $fres_pre_sem = ""; $cotes1 = $cotes2 = $total_credit1 = $total_credit2 = $valide_credit1 = $valide_credit2 = 0;
    $res_part1 = $res_part2 = '';
    while($res = $get_cotes->fetch_object()){
        // MCISME 
        // $res->RATR = $res->RMC = $res->RRC = 0;
        $tmp_res = (($res->TP1+$res->INT1)/2+$res->EXAM)/2;
        $tmp_cote = $res->RRC && $res->RRC > 0 ? $res->RRC : ($res->RATR>$tmp_res?$res->RATR : ($res->RMC && $res->RMC > 0 ? $res->RMC:$tmp_res));
        $tmp_cote = isset($res->JURY) && ($res->JURY > $tmp_cote || $res->JURY >= 10) ? $res->JURY : $tmp_cote;
        if($res->part%2) {
            $valide_credit1+= $tmp_cote > 9 ? $res->credit : 0;
            $total_credit1+= $res->credit;
            $cotes1+= $tmp_cote*$res->credit;
            $res_part1.= "<div class=\"skill clearfix\"><h3 class=\"fa-1x\">$res->name</h3><div class=skill-value>$tmp_cote</div></div><div class=\"skill-container skill\" style=\"width:".($tmp_cote*5)."%\"><div class=skill-percentage></div></div>";
        } else {
            $valide_credit2+= $tmp_cote > 9 ? $res->credit : 0;
            $total_credit2+= $res->credit;
            $cotes2+= $tmp_cote*$res->credit;
            $res_part2.= "<div class=\"skill clearfix\"><h3 class=\"fa-1x\">$res->name</h3><div class=skill-value>$tmp_cote</div></div><div class=\"skill-container skill\" style=\"width:".($tmp_cote*5)."%\"><div class=skill-percentage></div></div>";
        }
    } if (in_array($user->sec_id, [6])) {
        return_mailler("<h1><p>Les résultats de votre sections sont actuellement indisponible !</p><p>Veuillez vous referer a votre section pour plus d'informations</p></h1>") ; 
    } else { 
    ?><div class=half-bg></div>
    <div class=page>
        <div class=page-content>
            <header id=site_header class="header mobile-menu-hide">
                <div class=header-content>
                    <div class=header-lng>
                        <ul>
                            <li><a href=# class=active>Fr</a></li>
                            <li><a href=#>En</a></li>
                        </ul>
                    </div>
                    <div class=header-photo><img src="<?=file_exists(__DIR__.DS.'..'.DS.'..'.DS.$user->profile) ? $user->profile : '/public/assets/images/profile.webp'?>" alt="Alex Smith"></div>
                    <div class=header-titles>
                        <h2><?=$user->name?></h2>
                        <h4><?=$user->gender?></h4>
                    </div>
                </div>
                <div class=social-links>
                    <ul>
                        <li><a href=# target=_blank><i class="fab fa-twitter"></i></a></li>
                        <li><a href=# target=_blank><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href=https://bit.ly/3c81SWE target=_blank><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
                <div class=info-list>
                    <ul>
                        <li><span class=value><?=$user->phone?></span></li>
                        <li><span class=value><?=$user->email?></span></li>
                    </ul>
                </div>
                <div class=header-buttons>
                    <a href=/#homePage target=_blank class="btn btn-primary">ISTA-KIN</a>
                    <a href="/app/admin/pages/actions/student-resultat/?code=<?=$user->key?>&anacad=<?=$_POST['anacad']?>" target=_blank class="btn btn-primary">Imprimer</a>
                </div>
                <div class=copyrights>Institut Supérieur de Techniques Appliquées</div>
            </header>
            <div class=lmpixels-arrows-nav>
                <div class="lmpixels-arrow-left close" id="close-modal-profile"><i class="fa fa-times fw-lighter fa-2x"></i></div>
            </div>
            <div class=content-area>
                <div class=animated-sections>
                    <section data-id=resume class="animated-section section-active">
                        <div class=section-content>
                            <div class=page-title>
                                <h2>Profile Estudiantin</h2>
                                <h4><?=$this_class?></h4>
                            </div>
                            <div class=row>
                                <div class="col-xs-12 col-sm-12">
                                    <div class=block-title>
                                        <script>
                                            document.title = "Profile <?=$user->name?> | Bulletin SNEN";
                                        </script>
                                        <h3>Résultats | <?=$user->name?> | <?=$user->promo++.' - '.$user->promo?></h3>
                                    </div>
                                </div>
                            </div>
                            <?php if($user->system === 'LMD') { ?>
                            <div class=row>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="certificate-item clearfix">
                                    <div class="text-center fa-2x p-0 text-info certi-logo"><?= number_format($cotes1/$total_credit1, 2) ?></div>
                                        <div class=certi-content>
                                            <div class=certi-title>
                                                <h4>Premier Semestre</h4>
                                            </div>
                                            <div class=certi-id><span>Crédit validé </span></div>
                                            <div class=certi-company><span><?= $valide_credit1 ?> / 30</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="certificate-item clearfix">
                                    <div class="text-center fa-2x p-0 text-info certi-logo"><?= number_format($cotes2/$total_credit2, 2) ?></div>
                                        <div class=certi-content>
                                            <div class=certi-title>
                                                <h4>Second Semestre</h4>
                                            </div>
                                            <div class=certi-id><span>Crédit validé </span></div>
                                            <div class=certi-company><span><?= $valide_credit2 ?> / 30</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="certificate-item clearfix">
                                    <div class="text-center fa-2x p-0 text-success certi-logo"><?= App::get_mention($cotes = number_format(($cotes1+$cotes2)/($total_credit1+$total_credit2), 2)) ?></div>
                                        <div class=certi-content>
                                            <div class=certi-title>
                                                <h4>Resultat</h4>
                                            </div>
                                            <div class=certi-id><span>Moyenne Générale </span></div>
                                            <div class=certi-company><span><?= $cotes ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }else{?>
                            <div class=row>
                                <div class="col-xs-12">
                                    <div class="certificate-item clearfix">
                                    <div class="text-center fa-2x p-0 text-success certi-logo"><?= $cotes = number_format((($cotes1+$cotes2)/($total_credit1+$total_credit2))*5, 2) ?></div>
                                        <div class=certi-content>
                                            <div class=certi-title>
                                                <h4>Resultat</h4>
                                            </div>
                                            <div class=certi-id><span>Moyenne Générale </span></div>
                                            <div class=certi-company><span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <div class=white-space-50></div>
                            <div class=row>
                                <div class=col-xs-12>
                                    <div class="block-title border-bottom w-100">
                                        <h3>Premier Semestre</h3>
                                    </div>
                                    <div class="skills-info skills-second-style">
                                        <?= $res_part1 ?>
                                    </div>
                                    <div class=white-space-10></div>
                                    <div class="block-title border-bottom w-100">
                                        <h3>Deuxième Semestre</h3>
                                    </div>
                                    <div class="skills-info skills-second-style">
                                        <?= $res_part2 ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
<?php }} elseif ($proof_profile == 'multi') {  // GROUPE RESULTS 
    $data_list=$data_cotes='';
    $count = 0;
    $active_list = ' active';
    $active_cote = 'class="data-content active"';
    foreach ($std_infos as $id => $std) {$count++;$data = $std['data'];$std_cotes = $std['cotes'];
        $res_sec_sem=$res_pre_sem=$fres_sec_sem=$fres_pre_sem=$res_part1=$res_part2='';$cotes1=$cotes2=$total_credit1=$total_credit2=$valide_credit1=$valide_credit2=0;
        while($res = $std_cotes->fetch_object()){
            // MCISME 
            // $res->RATR = $res->RMC = $res->RRC = 0;
            $tmp_res = (($res->TP1+$res->INT1)/2+$res->EXAM)/2;
            $tmp_cote = $res->RRC && $res->RRC > 0 ? $res->RRC : ($res->RATR>$tmp_res?$res->RATR : ($res->RMC && $res->RMC > 0 ? $res->RMC:$tmp_res));
            $tmp_cote = isset($res->JURY) && ($res->JURY > $tmp_cote || $res->JURY >= 10) ? $res->JURY : $tmp_cote;
            if($res->part%2) {
                $valide_credit1+= $tmp_cote > 9 ? $res->credit : 0;
                $total_credit1+= $res->credit;
                $cotes1+= $tmp_cote*$res->credit;
                $res_part1.= "<div class=\"skill clearfix\"><h3 class=\"fa-1x\">$res->name</h3><div class=skill-value>$tmp_cote</div></div><div class=\"skill-container skill\" style=\"width:".($tmp_cote*5)."%\"><div class=skill-percentage></div></div>";
            } else {
                $valide_credit2+= $tmp_cote > 9 ? $res->credit : 0;
                $total_credit2+= $res->credit;
                $cotes2+= $tmp_cote*$res->credit;
                $res_part2.= "<div class=\"skill clearfix\"><h3 class=\"fa-1x\">$res->name</h3><div class=skill-value>$tmp_cote</div></div><div class=\"skill-container skill\" style=\"width:".($tmp_cote*5)."%\"><div class=skill-percentage></div></div>";
            }
        } $data_list.="<tr class=\"data-list-item$active_list\" data-num-list=$count data-getting-id=$id><td>$count</td><td>$data->name</td><td>$data->gender</td></tr>";
        $total_credit=$total_credit1|=1+$total_credit2|=1;
        $data_cotes.="<div $active_cote data-content-id=$id><div class=data-content-wrapper><div class=page-title><h2>Profile Estudiantin</h2><h4>$data->section / $data->option / $data->level / $data->class</h4></div><div class=row><div class='col-xs-12 col-sm-12'><div class='block-title border-bottom w-100'><h3>Résultats : $data->name</h3></div></div></div><div class=row><div class='col-xs-12 col-sm-4'><div class='certificate-item clearfix'><div class='text-center fa-2x p-0 text-info certi-logo'>".number_format($cotes1/$total_credit1, 2)."</div><div class=certi-content><div class=certi-title><h4>Premier Semestre</h4></div><div class=certi-id><span>Crédit validé </span></div><div class=certi-company><span>$valide_credit1 / 30</span></div></div></div></div><div class='col-xs-12 col-sm-4'><div class='certificate-item clearfix'><div class='text-center fa-2x p-0 text-info certi-logo'>".number_format($cotes2/$total_credit2, 2)."</div><div class=certi-content><div class=certi-title><h4>Second Semestre</h4></div><div class=certi-id><span>Crédit validé </span></div><div class=certi-company><span>$valide_credit2 / 30</span></div></div></div></div><div class='col-xs-12 col-sm-4'><div class=certificate-item clearfix><div class='text-center fa-2x p-0 text-success certi-logo'>".App::get_mention($cotes = number_format(($cotes1+$cotes2)/($total_credit), 2))."</div><div class=certi-content><div class=certi-title><h4>Resultat</h4></div><div class=certi-id><span>Moyenne Générale </span></div><div class=certi-company><span>$cotes</span></div></div></div></div></div><div class=white-space-50></div><div class=row><div class=col-xs-12><div class='block-title border-bottom w-100'><h3>Premier Semestre</h3></div><div class='skills-info skills-second-style'>$res_part1</div><div class=white-space-10></div><div class='block-title border-bottom w-100'><h3>Deuxième Semestre</h3></div><div class='skills-info skills-second-style'>$res_part2</div></div></div></div></div>";
        $active_list=''; $active_cote='class="data-content"';
   } ?>
       <style>
            .data-content {
                min-width: 100%;
                max-width: 100%;
                padding: 50px;
            }
            tr.data-list-item.active {
                color: #998;
                font-style: italic;
            }

            tr.data-list-item {
                cursor: pointer;
            }
            .section-content {
                padding: 0;
            }
            .section-content-wrapper {
                max-width:100%;
                display: flex;
                position:relative;
                /* transition: 1s left ease-in-out; */
                left:0;
            }
        </style>
        <script>
            (function(){
                let list_items = $('tr.data-list-item[data-num-list]');
                list_items.on('click', e => {
                    window.testVal = e;
                    list_items.removeClass('active');
                    $(e.currentTarget).addClass('active');
                    $('#content_profile').css({left:0-((e.currentTarget.dataset.numList-1)*100)+'%'});
                })
            })();
        </script>        
    <div class=half-bg></div>
    <div class=page>
        <div class=page-content>
            <header id=site_header class="header mobile-menu-hide">
                <div class=header-content>
                    <div class=header-lng>
                        <ul>
                            <li><a href=# class=active>Fr</a></li>
                            <li><a href=#>En</a></li>
                        </ul>
                    </div>
                    <div class=header-titles>
                        <h2>Résultats</h2>
                        <h4><?=$this_class?></h4>
                        <script>document.title="<?=$this_class?>"</script>
                    </div>
                </div>
                <div class=social-links>
                    <ul>
                        <li><a href=# target=_blank><i class="fab fa-twitter"></i></a></li>
                        <li><a href=# target=_blank><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href=https://bit.ly/3c81SWE target=_blank><i class="fab fa-facebook-f"></i></a></li>
                    </ul>
                </div>
                <div class="table-responsive mb-5 pb-3">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Nom & Postnom</th>
                                <th>Genre</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?=$data_list?>
                        </tbody>
                    </table>
                </div>
            </header>
            <div class=lmpixels-arrows-nav>
                <div class="lmpixels-arrow-left close" id="close-modal-profile"><i class="fa fa-times fw-lighter fa-2x"></i></div>
            </div>
            <div class=content-area>
                <div class=animated-sections>
                    <section data-id=resume class="animated-section section-active">
                        <div class=section-content>
                            <div class=section-content-wrapper id="content_profile">
                                <?=$data_cotes?>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
<?php } else return_mailler('<h3>Aucun résultat trouvé ! pour cette classe</h3>');
} else return_mailler("<h1>$error_response</h1>") ?>