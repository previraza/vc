<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
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
                                            <a class="btn btn-icon btn-info" data-bs-toggle="tooltip" btn-type=action
                                                btn-title=Restore data-bs-placement="top" title="Restore"
                                                href="<?= str_replace('trash', 'restore', url($fee->id)) ?>">
                                                <span class="btn-inner">
                                                    <i class="fa fa-edit">R</i>
                                                </span>
                                            </a>
                                            <a class="btn btn-icon btn-danger" data-bs-toggle="tooltip"
                                                btn-type=action btn-title=Erase data-bs-placement="top" title="Erase"
                                                href="<?= str_replace('trash', 'erase', url($fee->id)) ?>">
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
    </div>
</div>