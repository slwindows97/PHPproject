<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload File</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body background="backa.jpg">
  <nav class="navbar navbar-light bg-dark shadow-sm mb-4">
    
    <nav class="navbar navbar-inverse">
      <a class="navbar-brand" href="#">
      <img src="logoe.png" width="40" height="30" class="d-inline-block align-top" alt="">
    </a>
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><font size=6>eLEARNING</font></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span><font size=4> LOG OUT </font></a></li>
    </ul>
  </div>
</nav>
<center>
<h2><font color="white" size=8><b>FILE UPLOADING...</b></font></h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
<label for="file"><font color="white" size=5>Filename:</font></label>
<input type="file" name="file" id="file" />
<br />
<input type="submit" name="submit" value="Submit" />
</form>
</center>
<?php

$files=scandir("uploads");
for ($a=2; $a< count($files); $a++)
{
  ?>
  <p>
    <a download="<?php echo $files[$a] ?> "href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?>"></a>
  </p>
  <?php
}

