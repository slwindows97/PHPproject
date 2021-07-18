<?php
include('./config/helper_class.php');
$obj=new Helper_class;
$data_array=array("table"=>"login");
array_push($data_array,$_GET);
$rs=$obj->view_data_id($data_array);
$data=mysqli_fetch_array($rs);
?>
<?php include('header.php');?>
	<form name="f1" method="post" action="upac.php">
		<input type="hidden" name="id" value="<?php echo $data[0];?>">
		<table>
			<tr>
				<td>Admin Id</td>
				<td>:</td>
				<td><input type="text" name="id" value="<?php echo $data[0];?>"></td>
			</tr>
			<tr>
				<td>Admin Username</td>
				<td>:</td>
				<td><input type="username" name="username" value="<?php echo $data[1];?>"></td>
			</tr>
			<tr>
				<td>Admin password</td>
				<td>:</td>
				<td><input type="password" name="password" value="<?php echo $data[3];?>"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>