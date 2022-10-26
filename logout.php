<?php
session_start();
 
$_SESSION = array();

session_destroy();
 
// Redireciona para página de login
header("location: index.php");
exit;