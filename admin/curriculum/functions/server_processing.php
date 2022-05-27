<?php
require_once('../../../config.php');
 
$query = $conn->query("SELECT count(id) FROM academic_year");
$totalRecords = $query->fetch_row()[0];
 
 
$sql = "SELECT * FROM academic_year WHERE archived=0";
 
 
$query = $conn->query($sql);
$result = [];
while ($row = $query->fetch_assoc()) {
    $result[] = [
        $row['id'],
        $row['name'],
        $row['acad_year'],
        $row['semester'],
        $row['active'],
        $row['archived']
    ];
}
 
echo json_encode([
    //'draw' => $_GET['draw'],
    'recordsTotal' => $totalRecords,
    'recordsFiltered' => $totalRecords,
    'data' => $result,
]);