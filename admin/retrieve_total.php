<?php
require_once('../config.php');
 
$query = $conn->query("SELECT count(id) FROM academic_year");
$totalRecords = $query->fetch_row()[0];

$query = $conn->query("SELECT count(id) FROM user");
$totaluserRecords = $query->fetch_row()[0];
 
$sql = "SELECT * FROM academic_year WHERE archived=0 && active=1";
 
 
$query = $conn->query($sql);
$result = [];
$result2;
while ($row = $query->fetch_assoc()) {
    $result = [
        $row['name']
    ];
}
 
echo json_encode([
    'recordsTotal' => $totalRecords,
    'recorduserTotal' => $totaluserRecords,
    'data' => $result
]);