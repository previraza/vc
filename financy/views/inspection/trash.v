<?php $admin = in_array(auth()->role, ['A:A:A:AA', 'A:F:A:ES']); 
    $payments = $Payment->all(true); $slips = $Slip->all(true);
?>
<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
                <?=HTML::createTable(
                    ['Etudiants', 'N° Bordereau', 'Agent', 'Contact', 'Frais', 'Date d\'enregistrement', 'Date de suppression', 'Action'],
                    ($payments ?? []),
                    ['name', 'number', 'agent', 'contact', 'fee', 'created_at', 'deleted_at'],
                    null,   
                    [$admin?'restore':'explore', 'print'], 'slip'
                )?>
            </div>
        </div>
    </div>
</div>