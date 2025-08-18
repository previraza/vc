<?php $data_set = isset($data_edit) && $data_edit !== false ?>
<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                    <div class="card-title mb-0">
                        <h4 class="mb-0">
                            <?= $this->request->space ?> |
                            <?= $this->request->action ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (!$data_set) { ?>
            <div class="col-lg-12">
                <div class="card card-body">
                    <?= HTML::createTable(
                        ['Nom Complet', 'Telephone', 'Date de naissance', 'Role', 'Date d\'enregistrement', 'Date de Suppression', 'Action'],
                        ($User->all_() ?? []),
                        ['fullname', 'phone', 'date_of_birth', 'role', 'created_at', 'deleted_at'],
                        null,
                        $admin?['restore', 'profile']:['profile']
                    ) ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>