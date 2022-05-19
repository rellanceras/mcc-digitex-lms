<?php
require_once('../../../config.php');
 
$query = $conn->query("SELECT count(id) FROM academic_year");
$totalRecords = $query->fetch_row()[0];
 
//$length = $_GET['length'];
//$start = $_GET['start'];
 
$sql = "SELECT * FROM academic_year WHERE archived=0";
 
/*if (isset($_GET['search']) && !empty($_GET['search']['value'])) {
    $search = $_GET['search']['value'];
    $sql .= " WHERE fullname like '%$search%' OR email like '%$search%'";
}*/
 
//$sql .= " LIMIT $start, $length";
 
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