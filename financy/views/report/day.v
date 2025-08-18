<?php 
    $payments = $Payment->mineFromDay(); $slips = $Slip->mineFromDay();
?> <div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
            <?=HTML::createTable(
                    ['Etudiants', 'type', 'Frais', 'Tranche', 'Montant', 'Section', 'Promotion', 'Option', 'Classe', 'Reference', 'Annee', 'Contact', 'Agent Percepteur', 'Date d\'enregistrement'],
                    array_merge($payments ?? [], $slips ?? []),
                    ['name', 'type', 'fee', 'transhis', ["#filterValue", ['transh', 'transhis', 'value']], 'section', 'promotion', 'option', 'class', 'ref', 'acad_year', 'contact', 'agent', 'created_at'],
                    null,
                    [],
                    'TypeOfPay'
                )?>
            </div>
        </div>
    </div>
</div>