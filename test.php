<?php 
session_start();
$val = 19;

$_SESSION['val2'] = 19;
$_SESSION['val3'] = 19;
$_SESSION['val4'] = 19;
$_SESSION['val5'] = 19;
$_SESSION['val6'] = 19;
$_SESSION['val7'] = 19;

// session_destroy();

ECHO $_SESSION['val2'];
ECHO $_SESSION['val3'];
ECHO $_SESSION['val4'];

?>