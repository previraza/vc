<?php $data_set = isset($data_edit) && $data_edit !== false ?>
<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                    <div class="card-title mb-0">
                        <h4 class="mb-0"><?=$this->request->space?> | <?=$this->request->action?></h4>
                    </div>
                    <div class="card-action mt-2 mt-sm-0">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="true" aria-controls="collapseExample">
                            Add
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card collapse <?=$data_set?'show':null?>" id="collapseExample">
            <div class="card-body">
                    <form class="row align-items-end justify-content-between" action=<?= $data_set ? str_replace('edit', 'update', url()) : root($this->request->space.'/add') ?> method=POST dynamic>
                        <?php FORM::init($data_set?$data_edit:NULL) ?>     
                        <div class="form-contenair">
                            <div class="row">
                                <?php if ($this->request->action === 'index') { ?>
                                    <div class="col-lg-6">
                                        <?=Form::select('class', loadModel('users'))?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?=Form::select('student', loadModel('users'), null, true, 'class')?>
                                    </div>
                                <?php } else { ?>
                                    <div class="col-lg-8">
                                        <?=Form::input('client_name', 'Nom complet')?>
                                    </div>
                                    <div class="col-lg-4">
                                        <?=Form::input('contact', 'Numéro de Téléphone', false)?>
                                    </div>
                                <?php } ?>
                                <div class="col-lg-5">
                                    <?=Form::select('fee', loadModel('fees'))?>
                                </div>
                                <div class="col-lg-7">
                                    <?=Form::input('ref', 'Numéro Matricule', false)?>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="save" class="btn btn-primary" name=FORM::PAYMENT
                                value='<?= $data_set ? 'UPDATE' : 'INSERT' ?>'>Sauvégarder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        if (!$data_set) { ?>
            <div class="col-lg-12">
                <div class="card card-body">
                    <div class="table-responsive">
                        <div class="mb-3">
                            Toggle column: 
                            <a class="toggle-vis btn btn-outline-primary" data-column="0">Etudiants</a> - 
                            <a class="toggle-vis btn btn-outline-primary" data-column="1">Ref</a> - 
                            <a class="toggle-vis btn btn-outline-primary" data-column="2">Contact</a> - 
                            <a class="toggle-vis btn btn-outline-primary" data-column="3">Frais</a> - 
                            <a class="toggle-vis btn btn-outline-primary" data-column="4">Date</a> -
                            <a class="toggle-vis btn btn-outline-primary" data-column="5">Action</a>
                        </div>
                        <table id="column-hidden-datatable" class="table table-striped py-3" data-table="default">
                            <thead>
                                <tr>
                                    <th>Num.</th>
                                    <th>Debuteur</th>
                                    <th>Créditeur</th>
                                    <th>Libelé</th>
                                    <th>Somme</th>
                                    <th>Etat</th>
                                    <th>Suite</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i=0; $i < 12; $i++) { ?>
                                    <tr>
                                        <td>OP-<?=65831+$i?></td>
                                        <td>61 - Caisse</td>
                                        <td>127 - Imprimerie</td>
                                        <td>Paeiment de la prime de l'Agent numero <?=$i?></td>
                                        <td>120 000,00 Fc</td>
                                        <td>Terminer</td>
                                        <td>-</td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="btn btn-icon btn-success" data-bs-toggle="tooltip"
                                                    btn-type=action btn-title=PrintLink data-bs-placement="top" title="Printer" data-original-title="Printer" 
                                                    btn-link="<?= root('../printer/payment/'.$payment->code) ?>" href="#">
                                                    <span class="btn-inner">
                                                        <i class="fa fa-print">P</i>
                                                    </span>
                                                </a>
                                                <a class="btn btn-icon btn-danger" data-bs-toggle="tooltip"
                                                    btn-type=action btn-title=Delete data-bs-placement="top" title="Delete"
                                                    href="<?= root($this->request->space.'/delete/' . $payment->id) ?>">
                                                    <span class="btn-inner">
                                                        <i class="fa fa-edit">S</i>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th title="Student">Etudiants</th>
                                    <th title="Ref">Ref</th>
                                    <th title="Contact">Contact</th>
                                    <th title="Fee">Frais</th>
                                    <th title="Date">Date</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>