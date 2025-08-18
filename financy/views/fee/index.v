<?php $data_set = isset($data_edit) && $data_edit !== false; $admin = in_array(auth()->role, ['A:A:A:AA', 'A:F:A:ES']); ?>
<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <?php if($admin) { ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                        <div class="card-title mb-0">
                            <h4 class="mb-0">Frais</h4>
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
                        <form class="row align-items-end justify-content-between" action=<?= $data_set ? str_replace('edit', 'update', url()) : url('add') ?> method=POST dynamic>
                            <?php FORM::init($data_set?$data_edit:NULL) ?>     
                            <div class="form-contenair">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <?=Form::input('name')?>
                                    </div>
                                    <div class="col-lg-4">
                                        <?=Form::input('code')?>
                                    </div>
                                    <div class="col-lg-5">
                                        <?=Form::select('level', [
                                            '*'=>'All Level',
                                            '00'=>'Pre License',
                                            '01'=>'First License',
                                            '02'=>'Second License',
                                            '03'=>'Third License',
                                            '11'=>'First Master',
                                            '12'=>'Second Master',
                                        ])?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?=Form::input('value')?>
                                    </div>
                                    <div class="col-lg-4">
                                        <?=Form::select('devise', [
                                            'USD'=>'Dollar American',
                                            'CFD'=>'Franc Congolais'
                                        ])?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?=Form::input('serial', 'Account Number', false)?>
                                    </div>
                                    <div class="col-lg-3">
                                        <?=Form::input('year', 'Academic Year')?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?=Form::selectMultiple('allower', [
                                                'A'=>'Caise Principale',
                                                'B'=>'Caise Section'
                                            ], 'Authorization'
                                        )?>
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
                <div class="card card-body px-0">
                    <div class="table-responsive">
                        <div class="mb-3">
                            Toggle column: 
                            <a class="toggle-vis btn btn-outline-primary" data-column="0">Name</a> - 
                            <a class="toggle-vis btn btn-outline-primary" data-column="1">Code</a> - 
                            <a class="toggle-vis btn btn-outline-primary" data-column="2">Level</a> - 
                            <a class="toggle-vis btn btn-outline-primary" data-column="3">Year</a> - 
                            <a class="toggle-vis btn btn-outline-primary" data-column="4">Value</a> -
                            <a class="toggle-vis btn btn-outline-primary" data-column="5">Devise</a> -
                            <a class="toggle-vis btn btn-outline-primary" data-column="5">Action</a>
                        </div>
                        <table id="column-hidden-datatable" class="table table-striped py-3" data-table="default">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Level</th>
                                    <th>Year</th>
                                    <th>Value</th>
                                    <th>Devise</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($fees ?? [] as $fee) { ?>
                                    <tr>
                                        <td>
                                            <h6>
                                                <?= $fee->name ?>
                                            </h6>
                                        </td>
                                        <td>
                                            <?= $fee->code ?>
                                        </td>
                                        <td>
                                            <?= $fee->level ?>
                                        </td>
                                        <td>
                                            <?= $fee->year ?>
                                        </td>
                                        <td>
                                            <?= $fee->value ?>
                                        </td>
                                        <td>
                                            <?= $fee->devise ?>
                                        </td>
                                        <td>
                                            <div class="flex align-items-center list-user-action">
                                                <a class="btn btn-info" data-bs-toggle="tooltip"
                                                    btn-type=action btn-title=Explore data-bs-placement="top" title="Explore"
                                                    href="<?= url('explore/' . $fee->id) ?>">
                                                    <span class="btn-inner">Explore</span>
                                                </a>
                                                <?php if ($admin) {?>
                                                    <a class="btn btn-icon btn-success" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="Edit" data-original-title="Edit"
                                                        href="<?= url('edit/' . $fee->id) ?>">
                                                        <span class="btn-inner">
                                                            <i class="fa fa-edit">E</i>
                                                        </span>
                                                    </a>
                                                    <a class="btn btn-icon btn-danger" data-bs-toggle="tooltip"
                                                        btn-type=action btn-title=Delete data-bs-placement="top" title="Delete"
                                                        href="<?= url('delete/' . $fee->id) ?>">
                                                        <span class="btn-inner">
                                                            <i class="fa fa-edit">D</i>
                                                        </span>
                                                    </a>
                                                <?php } ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th title="Name"></th>
                                    <th title="Code"></th>
                                    <th title="Level"></th>
                                    <th title="Year"></th>
                                    <th title="Value"></th>
                                    <th title="Devise"></th>
                                    <th></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>