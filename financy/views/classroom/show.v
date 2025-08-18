<?php 
    $classroom = app()->request->action;
    $header = ['Etudiant']; $body = ['student'] ;
    $payments = $content = [] ;

    foreach (array_merge($Classroom->detail($classroom) ?? []) as $data) {
        $key = 'p_'.$data->fee_id;
        if($data->fee_transh){
            $transh = [];
            foreach (explode('|', $data->fee_transh) as $k => $transhis) {
                $key_ = "$key-$k";
                $transh[$key_] = $transhis; $body[] = $key_;
                $payments = array_merge($payments, $Classroom->payment($data->id, $data->fee_id, $key_, $transhis));
            } $header[$data->fee_name] = $transh;
        } elseif(strpos($data->fee_name, "Enrôlement") !== false){
            if(!isset($header['Enrôlements'])) $header['Enrôlements']=[];
                $header['Enrôlements'][] = $data->fee_value;
            $body[] = $key; $payments = array_merge($payments, $Classroom->payment($classroom, $data->fee_id, $key, false));
        } else {
            $header[$data->fee_name] = [$data->fee_name => $data->fee_value];
            $body[] = $key; $payments = array_merge($payments, $Classroom->payment($classroom, $data->fee_id, $key, false));
        }
    }
    $content = array_reduce($payments, function($resultat, $element) {
        
        if (!isset($resultat[$element->student]))
            $resultat[$element->student] = $element;
        else 
            $resultat[$element->student] = array_merge((array) $resultat[$element->student], (array) $element);
        return $resultat;
    }, []);
?>

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
                    $header,
                    $content,
                    $body,
                    null, ['print']
                )?>
            </div>
        </div>
    </div>
</div>
</div>