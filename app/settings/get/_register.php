<?php require_once "../params/connect";

# Read Values
## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = mysqli_real_escape_string($db,$_POST['search']['value']); // Search value

## Search 
$searchQuery = " ";
if($searchValue != ''){
   $searchQuery = " AND (
       register.date LIKE '%$searchValue%' OR
       number LIKE '%$searchValue%' OR
       CONCAT(nom, ' ', postnom, ' ', prenom) LIKE '%$searchValue%'
    )";
}

## Total number of records without filtering
$sel = mysqli_query($db,"SELECT count(*) AS allcount FROM register LEFT JOIN payments ON (payments.student = register.id AND payments.type = 'INSCR') WHERE register.delete = 0 AND traite = 0");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of record with filtering
$sel = mysqli_query($db,"SELECT count(*) AS allcount FROM register LEFT JOIN payments ON (payments.student = register.id AND payments.type = 'INSCR') WHERE register.delete = 0 AND traite = 0 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT *, numero_bordereau AS code, CONCAT(nom, ' ', postnom, ' ', prenom) AS fullname, register.date AS reg_date, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), register.date_de_naissance)), '%Y') + 0 AS age, payments.sum AS frais, register.id 
            FROM register LEFT JOIN payments ON (payments.student = register.id AND payments.type = 'INSCR') 
            WHERE register.delete = 0 AND traite = 0 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT ".$row.",".$rowperpage;
$empRecords = mysqli_query($db, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
   $data[] = array( 
      "id"=>$row['id'],
      "code"=>$row['code'],
      "fullname"=>$row['fullname'],
      "sexe"=>$row['sexe'],
      "age"=>$row['age'],
      "section"=>$row['section'],
      "pourcentage"=>$row['pourcentage'],
      "frais"=>$row['frais'],
      "date"=>$row['date']
   );
}

## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecords,
  "iTotalDisplayRecords" => $totalRecordwithFilter,
  "aaData" => $data
);

die(json_encode($response));