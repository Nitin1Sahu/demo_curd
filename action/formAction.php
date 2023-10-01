<?php
include_once('../db/db_conn.php');

if(isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $sql = "insert into user_info(fname, lname, contact, email) values('$fname', '$lname', '$contact', '$email')";

    $exe = $conn->query($sql);
    if($exe) {
        ECHO "Data Inserted Successfully";
    }
}
?>
