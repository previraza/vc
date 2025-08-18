<?php $data_set = isset($data_edit) && $data_edit !== false; $admin = in_array(auth()->role, ['A:F:A:ES', '0:F:A:E0', '0:F:S:ES']); ?>
<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <?php if ($admin) {?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                        <div class="card-title mb-0">
                            <h4 class="mb-0"><?=$this->request->space?> | <?=$this->request->action?></h4>
                        </div>
                        <div class="card-action mt-2 mt-sm-0">
                            <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                                aria-expanded="true" aria-controls="collapseExample">
                                Ajouter
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
                                    <div class="col-lg-3">
                                        <?php
                                            $Section = $this->db->query('SELECT id, `name` FROM sections WHERE active = 1');
                                            $allSections = [];
                                            while ($row = $Section->fetch_object()) $allSections[$row->id] = $row->name;
                                        ?>
                                        <?=Form::select('section', $allSections)?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php
                                            $Option = $this->db->query('SELECT id, `name` FROM options WHERE active = 1 AND section = '. array_slice(array_keys($allSections), 0, 1)[0]);
                                            $allOptions = [];
                                            while ($row = $Option->fetch_object()) $allOptions[$row->id] = $row->name;
                                        ?>
                                        <?=Form::select('option', $allOptions)?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?php
                                            $Level = $this->db->query('SELECT id, `name` FROM `level` WHERE active = 1');
                                            $allLevels = [];
                                            while ($row = $Level->fetch_object()) $allLevels[$row->id] = $row->name;
                                        ?>
                                        <?=Form::select('level', $allLevels, 'Niveau')?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?=Form::select('promotion', [
                                            // 2021 => '2021-2022',
                                            2022 => '2022-2023',
                                        ])?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?=Form::select('class', [], 'Classes')?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?=Form::select('student', [], 'Etudiant')?>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="form-group"><label for="input_fee" class="form-label">Frais</label><div class=d-grid>
                                            <select class="select2-basic-single js-states form-select form-control" data-parent="input_fee"
                                                id="input_fee" name="data[fee]" aria-describedby="fee" required><option selected value="8">Reinscription/Orientation</option></select></div></div> 
                                        </div>
                                    <div class="col-lg-3">
                                        <?=Form::input('number', 'N° Bordereau', false)?>
                                    </div>
                                    <div class="col-lg-4">
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
        <?php } if (!$data_set) { ?>
            <div class="col-lg-12">
                <div class="card card-body">
                    <?=HTML::createTable(
                        ['Etudiants', 'N° Bordereau', 'Reference', 'Contact', 'Frais', 'Date d\'enregistrement', 'Action'],
                        ($payments ?? []),
                        ['name', 'number', 'ref', 'contact', 'fee', 'created_at'],
                        null,
                        ['restore'], 'slip'
                    )?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>