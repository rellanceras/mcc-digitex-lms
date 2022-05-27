<?php
require_once('../../../config.php');
 
$query = $conn->query("SELECT count(id) FROM user");
$totalRecords = $query->fetch_row()[0];
 
//$length = $_GET['length'];
//$start = $_GET['start'];
 
$sql = "SELECT id, school_id, last_name, first_name, middle_name, birthday, address, role, department, program, email FROM user";
 
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
        $row['school_id'],
        $row['first_name'],
        $row['middle_name'],
        $row['last_name'],
        $row['birthday'],
        $row['address'],
        $row['role'],
        $row['department'],
        $row['program'],
        $row['email']
    ];
}
 
echo json_encode([
    //'draw' => $_GET['draw'],
    'recordsTotal' => $totalRecords,
    'recordsFiltered' => $totalRecords,
    'data' => $result,
]);