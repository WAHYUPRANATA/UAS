<?php
//function start lagi
session_start();

$_SESSION['login']='';
unset($_SESSION['login']);
session_unset();
session_destroy();
header( "Location: http://localhost/UAS/form.php" );
?>
