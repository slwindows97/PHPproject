<?php
include('./config/helper_class.php');
$obj=new Helper_class;
$data_array=array("table"=>"login");
array_push($data_array,$_POST);
print_r($data_array);
$status=$obj->update_data($data_array);
if($status==1){
?>
<script type="text/javascript">
	alert("Data Updated");
	window.location.href="profile.php";
</script>
<?php
}
else{
?>
<script type="text/javascript">
	alert("Error!");
	window.location.href="profile.php";
</script>
<?php
}
?>