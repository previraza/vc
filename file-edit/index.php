<?php 
    
    $query = "INSERT INTO courses (`name`, `titular`, `part`, `credit`, `class`, `ue`, `short`, `code`, `dte`) VALUES ";
    $sp = '<br />';

    $ecs = ["Météo générale","Instrumentation et mesures","Cartographie","Irrigation et Drainage","Géologie","Géographie physique","Agro météorologie et Agro climatologie","Eléments d\'agronomie et Fertilisation","Climatologie 1","Traitement des Données","Protection des cultures","Phytotechnie","Eléments d\'agronomie","Fertilisation","Législation agricole et environnementale","Protection et conservation de la nature","Géophysique","Télédétection et SIG","Cartographie","Géologie","Géomorphologie","Hydraulique générale","Hydraulique appliquée","Hydrologie générale","Océanographie","Résistance des matériaux","Béton armé","Géodésie","Bathymétrie","Géomatique","Barrage","Retenue d\'eau","Aménagement des eaux","Forage","Hydrogéologie","Probabilité et statistique","Anglais technique","Initiation à la recherche scientifique en anglais","UE Maths au choix :","Anglais 3","Tutorat 1 ou Entreprenariat 1","Maths au choix 2","Tutorat 2 ou Entreprenariat 2","Déontologie, Ethique et citoyenneté 2","Comptabilité, facturation, devis, appel d\'offres","Probabilité et statistique","Anglais technique","Initiation à la recherche scientifique en anglais","UE Maths au choix :","Anglais 3","Tutorat 1 ou Entreprenariat 1","Maths au choix 2","Tutorat 2 ou Entreprenariat 2","Déontologie, Ethique et citoyenneté 2","Comptabilité, facturation, devis, appel d\'offres"];
    $prs = [3,3,3,3,3,3,4,4,4,4,5,5,5,5,6,6,3,3,3,3,3,3,3,4,4,4,4,4,4,4,5,5,6,6,6,3,3,3,4,5,5,5,6,6,6,3,3,4,4,5,5,5,5,6,6];
    $crs = [2,2,3,3,2,2,1,1,2,2,2,2,2,2,1,1,1,3,1,1,1,1,2,3,1,2,2,2,1,1,2,2,2,1,1,2,3,2,3,5,2,2,2,3,5,2,3,2,3,5,2,2,2,3,5];
    $cls = [70,70,70,70,70,70,70,70,70,70,74,74,74,74,74,74,71,71,71,71,71,71,71,71,71,71,71,71,71,71,76,76,76,76,76,70,70,70,70,74,74,74,74,74,74,71,71,71,71,76,76,76,76,76,76];
    $ues = ["AGM201","AGM201","AGM202","AGM202","AGM203","AGM203","AGM207","AGM207","AGM208","AGM208","AGM302","AGM302","AGM304","AGM304","AGM306","AGM306","HYD201","HYD201","HYD202","HYD202","HYD202","HYD203","HYD203","HYD205","HYD205","HYD207","HYD207","HYD208","HYD208","HYD208","HYD304","HYD304","HYD308","HYD308","HYD308","TCI225","TCG221","TCG221","TCI22","TCG321","TCG32","TCI32","TCG32","TCG323","TCG322","TCI225","TCG221","TCG221","TCI22","TCG321","TCG32","TCI32","TCG32","TCG323","TCG322"];

    foreach ($ecs as $i => $ec){
        $query.=$sp."('$ec', 1, $prs[$i], $crs[$i], $cls[$i], (SELECT id FROM ue WHERE code = '$ues[$i]'), 'MCI-[$i]', 'MCI-[$i]', 'MCISME--EDITING-SOL-$i')"; $sp = ', <br />' ;
    } 
    die($query.';');
