<?php
include('./config/helper_class.php');
$obj=new Helper_class;
$data_array=array("table"=>"fac_tbl");
array_push($data_array,$_GET);
$status=$obj->delete_data($data_array);
if($status==1){
?>
<script type="text/javascript">
	alert("Data Deleted");
	window.location.href="viewfaculty.php";
</script>
<?php
}
else{
?>
<script type="text/javascript">
	alert("Error!");
	window.location.href="viewfaculty.php";
</script>
<?php
}
?>