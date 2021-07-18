<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>File Uploaded</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body bgcolor="cyan" color="yellow">
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
      <li><a href="faculty_profile.php"><font size=4>START PAGE</font></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><font size=4> LOG OUT </font></a></li>
    </ul>
  </div>
</nav><center>
<h3><font color="white" size=8><b>File uploaded !!</b></font><h3>
<?php
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
  echo "Upload: " . $_FILES["file"]["name"] . "<br />";
  echo "Type: " . $_FILES["file"]["type"] . "<br />";
  echo "Size: " . ($_FILES["file"]["size"] / 10240) . " Kb<br />";
  echo "Stored in: " . $_FILES["file"]["tmp_name"];
  }
?>
</center>