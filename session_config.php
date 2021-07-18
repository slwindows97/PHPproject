<?php
session_start();
if($_SESSION['info']=='' || empty($_SESSION['info'])){
	header('location:index.html');
}
?>