<?php include('./config/helper_class.php');?>
<body background="backa.jpg">
	<table border="3" style="width:100%">
		<tr>
			<th><font color="white" size=6>Faculty Name</font></th>
			<th><font color="white" size=6>Faculty Qualification</font></th>
			<th><font color="white" size=6>Faculty Email</font></th>
			<th><font color="white" size=6>Faculty Phone</font></th>
			<th><font color="white" size=6>Faculty Username</font></th>
			<th><font color="white" size=6>Faculty Password</font></th>
			<th><font color="white" size=6>Action</font></th>
		</tr>
		<?php
		$obj=new Helper_class;
		$data_array=array("table"=>"fac_tbl");
		$rs=$obj->view_data($data_array); 
		while($data=mysqli_fetch_array($rs)){
		?>
		<tr>
			<td><font color="white" size=4><?php echo $data[1];?></font></td>
			<td><font color="white" size=4><?php echo $data[2];?></font></td>
			<td><font color="white" size=4><?php echo $data[3];?></font></td>
			<td><font color="white" size=4><?php echo $data[4];?></font></td>
			<td><font color="white" size=4><?php echo $data[5];?></font></td>
			<td><font color="white" size=4><?php echo $data[6];?></font></td>
			<td><a href="delfac.php?id=<?php echo $data[0];?>"><font color="Yellow" size=4>CLICK to DELETE</font></a></td>
		</tr>
		<?php
	}
	?>
	</table>
</body>
</html>