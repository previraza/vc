<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-body">
                <?=HTML::createTable(
                    ['Student', 'Ref', 'Contact', 'Fee', 'Date', 'Action'],
                    ($payments ?? []),
                    ['name', 'ref', 'contact', 'fee', 'created_at'], null, ['print']
                )?>
            </div>
        </div>
    </div>
</div>