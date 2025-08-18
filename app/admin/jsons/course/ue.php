<?php require_once "../../../settings/params/connect";

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
       ue.code LIKE '%$searchValue%' OR
       ue.name LIKE '%$searchValue%' OR
       CONCAT(teachers.firstname, ' ', teachers.lastname) LIKE '%$searchValue%'
    )";
}

## Total number of records without filtering
$sel = mysqli_query($db,"SELECT count(*) AS allcount FROM ue LEFT JOIN teachers ON (teachers.id = ue.titular) WHERE ue.delete = 0");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of record with filtering
$sel = mysqli_query($db,"SELECT count(*) AS allcount FROM ue LEFT JOIN teachers ON (teachers.id = ue.titular) WHERE ue.delete = 0 ".$searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "SELECT ue.id, ue.code, ue.name, ue.cmi, ue.tp, ue.td, ue.ue, CONCAT(teachers.firstname, ' ', teachers.lastname) AS titular
                FROM ue LEFT JOIN teachers ON (teachers.id = ue.titular) 
                WHERE ue.delete = 0 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT ".$row.",".$rowperpage;
$empRecords = mysqli_query($db, $empQuery);
$data = array();

while ($row = mysqli_fetch_assoc($empRecords)) {
   $data[] = $row;
}

## Response
$response = array(
  "draw" => intval($draw),
  "iTotalRecords" => $totalRecords,
  "iTotalDisplayRecords" => $totalRecordwithFilter,
  "aaData" => $data
);

die(json_encode($response));