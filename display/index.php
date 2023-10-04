<?php 
require_once('../db/db_conn.php');
$sql = "SELECT * FROM user_info";
$exe = $conn->query($sql);
 
while($rawdata = $exe->fetch_assoc()) {
    $data[] = $rawdata;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Contact</th>
      <th scope="col">Email</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
   <?php foreach($data as $user) {?>
    <tr>
      <td><?php ECHO $user['id'];?></td>
      <td><?php ECHO $user['fname'];?></td>
      <td><?php ECHO $user['lname'];?></td>
      <td><?php ECHO $user['contact'];?></td>
      <td><?php ECHO $user['email'];?></td>
      <td><a href="../operation/update.php?user=<?php ECHO $user['id'];?>"><button>Edit</button></a></td>
      
    </tr>
   <?php }?>
  </tbody>
</table>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>