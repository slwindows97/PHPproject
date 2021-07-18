<?php include('./config/helper_class.php');?>
<body background="backa.jpg">
	<table border="3" style="width:100%">
		<tr>
			<th><font color="white" size=6>Admin Id</font></th>
			<th><font color="white" size=6>Admin Username</font></th>
			<th><font color="white" size=6>Admin Password</font></th>
		</tr>
		<?php
		$obj=new Helper_class;
		$data_array=array("table"=>"login");
		$rs=$obj->view_data($data_array); 
		while($data=mysqli_fetch_array($rs)){
		?>
		<tr>
			<td><font color="white" size=4><?php echo $data[0];?></font></td>
			<td><font color="white" size=4><?php echo $data[1];?></font></td>
			<td><font color="white" size=4><?php echo $data[3];?></font></td>
		</tr>
		<?php
	}
	?>
	</table>
</body>
</html>