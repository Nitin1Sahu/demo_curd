<?php
require_once('./db/db_conn.php');
$sql = "SELECT * FROM user_info";
$exe = $conn->query($sql);

while($rawdata = $exe->fetch_assoc()) {
    $data[] = $rawdata;
}


foreach($data as $user) {
    ECHO "<pre>";
    print_r($user);
    ECHO "</pre>";
}

$arr = [1, 2, 3, 4, 5];
foreach($arr as $a) {
    ECHO $a;
}


?>