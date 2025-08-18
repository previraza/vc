<?php require_once '../app/settings/get/free.php'?>
<!DOCTYPE html>
<html lang="en" class=dark>

  <head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title>ISTA | Kinshasa </title>
    <link rel="icon" type="image/png" href="https://www.ista.ac.cd/public/assets/img/logo/logo-white.webp" />

    <!-- CSS Assets -->
    <link rel="stylesheet" href="https://tests.viraza.net/pay/css/app.css" />

    <!-- Javascript Assets -->
    <script src="https://tests.viraza.net/pay/js/app.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"
      id="theme-styles" />
    <script src="/assets/js/core/libs.min.js"></script>
    <script src="/assets/js/core/external.min.js"></script>
    <script src="/assets/js/plugins/select2.js" defer></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

      <link rel="stylesheet" href="/assets/css/core/libs.min.css" />
    
      <!-- Flatpickr css -->
      <link rel="stylesheet" href="/assets/css/hope-ui.mind1f1.css?v=2.2.0" />
      <link rel="stylesheet" href="/assets/css/pro.mind1f1.css?v=2.2.0" />
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="/assets/css/custom.mind1f1.css?v=2.2.0" />
      
      <link rel="stylesheet" href="/assets/vendor/choiceJS/style/choices.min.css">    
  
      <!-- Dark Css -->
      <link rel="stylesheet" href="/assets/css/dark.mind1f1.css?v=2.2.0" />
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="/assets/css/customizer.mind1f1.css?v=2.2.0" />
   
      <link rel="stylesheet" href="/assets/css/blog.min.css"/> 
  </head>

  <body x-data class="is-header-blur dark" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
      <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
      <!-- Main Content Wrapper -->
      <main class="main-content w-full px-[var(--margin-x)] pb-8 mt-0">
        <div class="flex items-center space-x-4 py-5 lg:py-6">
          <h2 class="text-xl font-medium text-slate-800 dark:text-navy-50 lg:text-2xl">
            ISTA | Kinshasa
          </h2>
          <div class="hidden h-full py-1 sm:flex">
            <div class="h-full w-px bg-slate-300 dark:bg-navy-600"></div>
          </div>
          <ul class="hidden flex-wrap items-center space-x-2 sm:flex">
            <li class="flex items-center space-x-2">
              <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent t_blink"
                href="https://www.ista.ac.cd" >
                Inscription / Orientation
              </a>
              <svg x-ignore xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </li>
            <li>Verification de Code</li>
          </ul>
        </div>
        <div class="grid place-items-center">
          <div class="card mt-20 w-full max-w-xl p-4 sm:p-5" x-data="pages.initCreditCard">
            <div
              class="relative mx-auto -mt-20 h-40 w-72 rounded-lg text-white shadow-xl transition-transform hover:scale-110 lg:w-80">
              <div class="h-full w-full rounded-lg" :class="creditCardUI"></div>
              <div class="absolute top-0 flex d-flex h-full w-full flex-col justify-between p-4 sm:p-5">
                <img alt="Logo ISTA | Kinshasa" src="https://www.ista.ac.cd/public/assets/img/logo/logo-white.webp" width=75 margin-left=100px; />
                <p class="text-center" style = "font-family: initial !important; font-size: 32px  !important; color: black  !important;" > ISTA - KINSHASA</p>
              </div>
            </div>
            <div class="flex items-center justify-between py-4">
              <p class="text-xl font-semibold text-primary dark:text-accent-light">Orientation des étudiants</p>
              <div class="badge rounded-full border border-primary text-primary dark:border-accent-light dark:text-accent-light">
              </div>
            </div>
            <form class="space-y-4" id=act_pay>
              <div class="grid gap-4">
                <label class="block">
                  <span>CODE D'ETUDIANT</span>
                  <input 
                    id=ipt_pin
                    class="form-input mt-1.5 w-full rounded-lg bg-slate-150 px-3 py-2 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                    name="type" id="type"
                    placeholder="SEC-AAAA-0000-BBBB" 
                    type="text"  
                    maxlength="20"
                    width=100 />
                </label>
              </div>
              <div class="flex justify-center space-x-2 pt-1 pb-2">
              <button
                  class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    Validé
                </button>
              </div>
            </form>
            <form class="space-y-4" id=gen_pay style=display:none;>
              <label class="block d-grid">
                <span>Choix Section</span>
                <select class="select2-basic-single form-select form-control" name="section" id="input_section">
                  <?php 
                      $Section = $db_->query('SELECT id, `name` FROM sections WHERE active = 1');
                      while ($row = $Section->fetch_object()) {
                        $first_section = $first_section ?? $row->id;
                        echo "<option value=$row->id>$row->name</option>";
                      }
                  ?>
                </select>
                <input type="hidden" name="promotion" id="input_promotion" value=2022>
              </label>
              <label class="block d-grid">
                <span>Choix Option</span>
                <select class="select2-basic-single form-select form-control" name="option" id="input_option">
                  <?php 
                      $Option = $db_->query('SELECT id, `name` FROM options WHERE active = 1 AND section = '.$first_section);
                      while ($row = $Option->fetch_object()) {
                        $first_option = $first_option ?? $row->id;
                        echo "<option value=$row->id>$row->name</option>";
                      }
                  ?>
                </select>
              </label>
              <label class="block d-grid">
                <span>Choix Niveau</span>
                <select class="select2-basic-single form-select form-control" name="level" id="input_level">
                  <?php 
                      $Level = $db_->query('SELECT id, `name` FROM `level` WHERE active = 1');
                      while ($row = $Level->fetch_object()) {
                        $first_level = $first_level ?? $row->id;
                        echo "<option value=$row->id>$row->name</option>";
                      }
                  ?>
                </select>
              </label>
              <label class="block d-grid">
                <span>Choix Classe</span>
                <select class="select2-basic-single form-select form-control" name="class" id="input_class">
                </select>
              </label>
              <div class="flex justify-center space-x-2 pt-1 pb-2">
                <button
                  class="btn min-w-[7rem] border border-slate-300 font-medium text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                  Annuler
                </button>
                <button
                  class="btn min-w-[7rem] bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                  Confirmer
                </button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
    <script>
      const Mine = {
        orientation : {
          check : () => {
            std = Mine.std.student;
            return (
              (std.next_level == 1 && $('#input_level').val() == 1 && std.section == 6 && $('#input_section').val() == 7 && Mine.std.cote >= 50) ||
              ($('#input_level').val() == std.level && std.next_level != 0) || 
              (
                $('#input_level').val() == std.next_level && 
                (
                  std.option == $('#input_option').val() || (std.option == 4)
                )
              )
            ) ? true : false;
          }
        }
      };
      window.addEventListener("DOMContentLoaded", () => Alpine.start());
        document.querySelector('form#gen_pay').addEventListener('submit', e => {

          e.preventDefault();
          t = document.querySelector('#input_class').value;
          if (t === '' || t == 0) return new Swal('Classe Indisponible', 'Veuillez choisir une classe valide dans les possibilités fournies...', 'error')
          if(!Mine.orientation.check()) return new Swal('Non Eligible', 'Votre profil n\'est pas éligible pour effectuer une réinscription ou une orientation dans la classe sélectionnée', 'error')
          Swal.fire({
              title: `Réinscripon/Orientation`,
              text: "Es-tu sûr de ton choix de classe ?",
              icon: 'warning',
              showCancelButton: true,
              backdrop: `rgba(60,60,60,0.8)`,
              confirmButtonText: 'Oui, je confirme !',
              confirmButtonColor: "#32c021"
          }).then((result) => {
              if (result.isConfirmed)
                fetch(`/app/settings/get/orientation/set?std=${Mine.std.student.id}&class=${$('#input_class').val()}&MCISME=${Date.now()}`+'&method=JSON').then(
                  response => {
                    if(response.status === 205) Swal.fire(
                          `Réinscripon/Orientation Réussie`,
                          `Votre demande de réinstallation ou d'orientation a été effectuée avec succès`,
                          `success`
                    ); else if(response.status === 206) Swal.fire(
                        `Échec de la Réinscription/Orientation`,
                        `Votre profil semble déjà exister dans une classe, si vous souhaitez modifier votre choix précédent, merci de vous rendre au service académique pour la modification de votre choix.`,
                        `info`
                    ); else Swal.fire(
                        `Échec de la Réinscription/Orientation`,
                        `Une erreur s'est produit pendant votre réinstallation ou d'orientation.`,
                        `error`
                    ); 
                  }
              )
          })
        });
        document.querySelector('form#act_pay').addEventListener('submit', e => {
          e.preventDefault();
          let PIN = document.querySelector('#ipt_pin').value;
          fetch(`/app/settings/get/orientation?code=${PIN}`).then(d => d.json().then(r => {
            if (r.status === 'success') {
              if(!r.success) return new Swal(`Echèc de la Réinscription/Orientation`, `L'étudiant selectionner n'est pas éligible a pouvoir effectuer une Réinscription/Orientation`, 'info')
              $('form#gen_pay').fadeIn();
              if(r.student.section == 6) $('#input_section').val(7).change().prop("disabled", true);
              else $('#input_section').val(r.student.section).change();
              afterLoadOption = () => {
                if(r.student.section == 6) $('#input_option').val(4).change().prop("disabled", true);
                else $('#input_option').val(r.student.option).change();
                if(r.student.next_level != 0) $('#input_level').val(r.student.next_level).change().prop("disabled", true);
              }; afterLoadClass = () => {
                $('#input_class').val(r.student.class).change();
              }
              Mine.std = r; 
              Object.freeze(Mine);
            } else {
              sw = new Swal(`Echèc de la Réinscription/Orientation`, r.content, r.status)
              console.log(r.response)
            }
          }));
        });
        $('#input_section').on('change', e => changeOption());
        $('#input_option, #input_level, #input_promotion').on('change', e => changeClass());
        changeOption = () => {
            var std = $("#input_option").html('');
            $.ajax({
                url: "/app/settings/get/options.php",
                type: "POST",
                dataType: "json",
                data: {
                    section: $('#input_section').val()
                },
                success: function(res) {
                    try {
                        res.map(({ id, text }) => std.append(new Option(text, id)));
                        changeClass();
                        if(typeof(afterLoadOption) === 'function') afterLoadOption();
                    } catch (error) {
                        std.append(new Option(res.text, res.id))
                    }
                }
            });
        }
        changeClass = () => {
            var a = $("#input_class").html('');
            $.ajax({
                url: "/app/settings/get/classes_.php",
                type: "POST",
                dataType: "json",
                data: { 
                    option: $('#input_option').val(),
                    promotion: $('#input_promotion').val(),
                    level: $('#input_level').val(),
                },
                success: function(r) {
                    try {
                        r.map(({ id, text }) => a.append(new Option(text, id)));
                        if(typeof(afterLoadClass) === 'function') afterLoadClass();
                    } catch (error) {
                        a.append(new Option(r.text, r.id))
                    }
                }
            });
        }
    </script>
  </body>
</html>