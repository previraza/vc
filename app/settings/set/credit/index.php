<?php session_start();
    require_once "../../params/connect";
    if(isset($_GET['type'])){
        extract($_GET);
        if(isset($type, $std_id, $std_name, $inf_order, $actu_order))
            if (($actu_order - $inf_order) < 0) $inf_order = $actu_order ; 
            if(mysqli_query($db,"UPDATE `students` SET credit = (credit - $inf_order) WHERE id = $std_id"))
                    $actu_order -= $inf_order ;
    } echo $actu_order;
?>