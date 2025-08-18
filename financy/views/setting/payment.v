<?php $data_set = isset($data_edit) && $data_edit !== false ?>
<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                    <div class="card-title mb-0">
                        <h4 class="mb-0">Frais</h4>
                    </div>
                    <div class="card-action mt-2 mt-sm-0">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button"
                            aria-expanded="true" aria-controls="collapseExample">
                            Formulaire
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card collapse show " id="collapseExample">
                <div class="card-body">
                    <form class="row align-items-end justify-content-between" action=<?= $data_set ? './update' : 'payment/save' ?> method=POST dynamic>
                        <div class="form-contenair">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" name="data[name]"
                                            value="<?= $data_edit->name ?? $_POST['data']['name'] ?? '' ?>"
                                            aria-describedby=" name" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="code" class="form-label">Code</label>
                                        <input type="text" class="form-control" id="code" name="data[code]"
                                            value="<?= $data_edit->code ?? $_POST['data']['code'] ?? '' ?>"
                                            aria-describedby=" code" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="level" class="form-label">Level</label>
                                        <select class="select2-basic-single js-states form-select form-control" id=level
                                            name="data[level]">
                                            <option <?= ($data_edit->level ?? $_POST['data']['level'] ?? '') == '*' ? 'selected' : null ?> value="*">
                                                Tout
                                                les niveau</option>
                                            <option <?= ($data_edit->level ?? $_POST['data']['level'] ?? '') == '00' ? 'selected' : null ?> value="00">
                                                Post Licence</option>
                                            <option <?= ($data_edit->level ?? $_POST['data']['level'] ?? '') == '01' ? 'selected' : null ?> value="01">
                                                Premiere Licence</option>
                                            <option <?= ($data_edit->level ?? $_POST['data']['level'] ?? '') == '02' ? 'selected' : null ?> value="02">
                                                Deuxieme Licence</option>
                                            <option <?= ($data_edit->level ?? $_POST['data']['level'] ?? '') == '03' ? 'selected' : null ?> value="03">
                                                Troisieme Licence</option>
                                            <option <?= ($data_edit->level ?? $_POST['data']['level'] ?? '') == '11' ? 'selected' : null ?> value="11">
                                                Premier Master</option>
                                            <option <?= ($data_edit->level ?? $_POST['data']['level'] ?? '') == '12' ? 'selected' : null ?> value="12">
                                                Deuxieme Master</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label for="value" class="form-label">Value</label>
                                        <input type="number" class="form-control" id="value" name="data[value]"
                                            value="<?= $data_edit->value ?? $_POST['data']['value'] ?? '' ?>"
                                            aria-describedby="value" min=1 required>
                                        <input type="hidden" class="form-control" name="data[year]"
                                            value="<?= $data_edit->year ?? $_POST['data']['year'] ?? '' ?>"
                                            aria-describedby="year" value="2022" required>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="Devise" class="form-label">Devise</label>
                                        <select class="select2-basic-single js-states form-select form-control"
                                            id=Devise name="data[devise]">
                                            <option <?= ($data_edit->devise ?? $_POST['data']['devise'] ?? '') == 'USD' ? 'selected' : null ?> value="USD">Dollar American</option>
                                            <option <?= ($data_edit->devise ?? $_POST['data']['devise'] ?? '') == 'CFD' ? 'selected' : null ?> value="CFD">Franc Congolais</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="serial" class="form-label">Numero de compte</label>
                                        <input type="text" class="form-control" id="serial" name="data[serial]"
                                            value="<?= $data_edit->serial ?? $_POST['data']['serial'] ?? '' ?>"
                                            aria-describedby="serial">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="code" class="form-label">Autorisation</label>
                                        <select multiple class="form-control choices-multiple-remove-button"
                                            name=data[allower][] id=allower required>
                                            <option <?= in_array('A', explode('|', ($data_edit->allower ?? $_POST['data']['allower'] ?? ''))) ? 'selected' : null ?> value="A"
                                                selected>
                                                Caise
                                                Principale
                                            </option>
                                            <option <?= in_array('B', explode('|', ($data_edit->allower ?? $_POST['data']['allower'] ?? ''))) ? 'selected' : null ?> value="B">
                                                Caise
                                                Section
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button type="save" class="btn btn-primary" name=FORM::PAYMENT
                                value='<?= $data_set ? 'UPDATE' : 'INSERT' ?>'>Sauvégarder</button>
                            <input type="hidden" name="data_id" value=<?= $data_edit->id ?? 0 ?>>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
        if (!$data_set) { ?>
            <div class="col-lg-12">
                <div class="card card-body px-0">
                    <div class="table-responsive">
                        <table class="table table-striped py-3" role="grid" data-toggle="doctor_visit">
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
                                                <a class="btn btn-icon btn-success" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit" data-original-title="Edit"
                                                    href="<?= url($fee->id . 'edit') ?>">
                                                    <span class="btn-inner">
                                                        <i class="fa fa-edit">E</i>
                                                    </span>
                                                </a>
                                                <a class="btn btn-icon btn-danger" data-bs-toggle="tooltip"
                                                    btn-type=action btn-title=Delete data-bs-placement="top" title="Delete"
                                                    href="<?= url($fee->id . '/delete') ?>">
                                                    <span class="btn-inner">
                                                        <i class="fa fa-edit">D</i>
                                                    </span>
                                                </a>
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