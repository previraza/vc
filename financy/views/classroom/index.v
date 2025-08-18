<div class="container-fluid content-inner pb-0" id="page_layout">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center flex-wrap">
                    <div class="card-title mb-0">
                        <h4 class="mb-0">Liste des classes</h4>
                    </div>
                    <div class="card-action mt-2 mt-sm-0">
                        <a class="btn btn-primary" data-bs-toggle="collapse" href="#" role="button" aria-expanded="true" aria-controls="collapseExample">
                            Print
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="px-0 card-body">
                <?=HTML::createTable(
                    ['Section', 'Option', 'Niveau', 'Classe', 'Étudiants', 'Action'],
                    array_merge($Classroom->all() ?? []),
                    ['section', 'option', 'level', 'class', 'students'],
                    null, ['explore']
                )?>
            </div>
        </div>
    </div>
</div>

<!-- ['Section', 'Option', 'Niveau', 'Classe', 'Étudiants', 'Frais d\'étude' => ['Trache-1', 'Trache-2'], 'Enrolement', 'Total', 'Taux', 'Action'],
array_merge($Classroom->all() ?? []),
['section', 'option', 'level', 'class', 'students', 'fs', 'fs', 'fe', 'ft', 'ratio'],
null, ['explore'] -->