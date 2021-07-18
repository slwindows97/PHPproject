<?php
include('./config/helper_class.php');
include('session_config.php');
$data_array=array("table"=>"fac_tbl");
array_push($data_array,$_POST);
//print_r($data_array);die();
$obj=new helper_class;
$status=$obj->insert_data($data_array);
if($status==1){
	?>
	<script type="text/javascript">
		alert("Data Saved Successfully");
	</script>
	<?php
}else{
	echo "Error!Data Save Does Not Possible";
}
?>