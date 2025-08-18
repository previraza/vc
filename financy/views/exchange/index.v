<?php $data_set = isset($data_edit) && $data_edit !== false ?>
<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
                <?=HTML::createTable(
                    ['Etudiants', 'N° Bordereau', 'Reference', 'Contact', 'Frais', 'Date d\'enregistrement', 'Action'],
                    ($payments ?? []),
                    ['name', 'number', 'ref', 'contact', 'fee', 'created_at'],
                    null,
                    ['print'],
                    'TypeOfPay'
                )?>
            </div>
        </div>
    </div>
</div>