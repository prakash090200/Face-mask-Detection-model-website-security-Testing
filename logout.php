<?php 
session_start();
session_destroy();
header('location:first.php');
?>