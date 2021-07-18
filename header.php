<?php include('session_config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>eLEARNING</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-light bg-dark shadow-sm mb-4">
    
    <nav class="navbar navbar-inverse">
      <a class="navbar-brand" href="#">
      <img src="logoe.png" width="40" height="30" class="d-inline-block align-top" alt="">
    </a>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><font size=6>eLEARNING</font></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="updateadmin.php"><font size=4>UPDATE ADMIN</font></a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href=""><font size=4>VIEW USERS</font><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="viewfaculty.php">View Faculty</a></li>
          <li><a href="viewstudent.php">View Student</a></li>
        </ul>
      </li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><font size=4> LOG OUT </font></a></li>
    </ul>
  </div>
</nav>





