<body background="backa.jpg">
<?php
session_start();
include('./config/helper_class.php');
$obj=new Helper_class;
$data=array("table"=>"fac_tbl");
array_push($data,$_POST);
$rs=$obj->login_check($data);
$result=mysqli_fetch_array($rs);
if(!empty($result)){
	$_SESSION['info']=$result;
?>
<script type="text/javascript">
	alert("Login successfull");
	window.location.href="faculty_profile.php";
</script>
<?php
}
else{
?>
<script type="text/javascript">
	alert("Invalid Username or Password");
	window.location.href="index.html";
</script>
<?php

}

?>
</body>


