<?php
session_start();
$_SESSION['info']='';
session_destroy();
header('location:index.html');
?>