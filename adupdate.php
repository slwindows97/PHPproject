<?php include('./config/helper_class.php');?>
<?php include('header.php');?>
	<table border="1">
		<tr>
			<th>Admin Id</th>
			<th>Admin Username</th>
			<th>Admin Password</th>
			<th>Update</th>
		</tr>
		<?php
		$obj=new Helper_class;
		$data_array=array("table"=>"login");
		$rs=$obj->view_data($data_array); 
		while($data=mysqli_fetch_array($rs)){
		?>
		<tr>
			<td><?php echo $data[0];?></td>
			<td><?php echo $data[1];?></td>
			<td><?php echo $data[3];?></td>
			<td><a href="updateadmin.php?id=<?php echo $data[0];?>">Update</a></td>
		</tr>
		<?php
	}
	?>
	</table>
</body>
</html>
