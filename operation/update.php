<?php
include_once('../db/db_conn.php');
if(isset($_GET['user'])) {
    $u_id = $_GET['user']; // 1
    $sql = "SELECT * FROM user_info WHERE id='$u_id'";
    $exe = $conn -> query($sql);
    $fetchUserData = $exe->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.style.css">
    <title>Crud - Khushbu</title>
</head>
<body>
    <h1>Updating User Data</h1>
    <form action="../action/updateAction.php" method="post">
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" placeholder="Enter your first name..." value="<?php ECHO $fetchUserData['fname'];?>">
        <br><br>

        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" placeholder="Enter your last name..." value="<?php ECHO $fetchUserData['lname'];?>">
        <br><br>

        <label for="contact">Contact</label>
        <input type="tel" name="contact" id="contact" placeholder="Enter your Contact..." value="<?php ECHO $fetchUserData['contact'];?>">
        <br><br>

        <label for="email">email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email..." value="<?php ECHO $fetchUserData['email'];?>">
        <br><br>

        <button name="submit" value="submit">Submit</button>

        
    </form>
</body>
</html>




