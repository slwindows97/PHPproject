<?php
class Connect{
	protected $con;
	function __construct(){
		$this->con=mysqli_connect("localhost","root","");
		mysqli_select_db($this->con,"db_admin");
	}
}
class Helper_class extends Connect{
	private $table_name;
	/*Function name:insert_data
	arguementlist:type array
	return type:integer
	created by:TIH MCA
	Date:14.8.19*/
	public function insert_data($data_array){
		$this->table_name=$data_array['table'];
		$count=count($data_array[0]);
		$sql="insert into ".$this->table_name."(";
		$sql1="values(";
		$i=1;
		foreach($data_array[0] as $key=>$value){
			if($i==$count){
				$sql=$sql.$key.")";
				$sql1=$sql1."'".$value."')";
			}
			else{
				$sql=$sql.$key.",";
				$sql1=$sql1."'".$value."',";
			}
			$i++;
		}
		$sql=$sql." ".$sql1;
		return mysqli_query($this->con,$sql);
	}
	/*End of function Insert_data*/
	/*Function name:view_data*/
	public function view_data($data_array){
		$this->table_name=$data_array['table'];
		$sql="select * from ".$this->table_name;
		$rs=mysqli_query($this->con,$sql);
		return $rs;
	}

	/*end of function*/
	/*function name view_data_id*/
	public function view_data_id($data){
		$this->table_name=$data['table'];
		$sql="select * from ".$this->table_name." where ";
		foreach($data[0] as $key=>$value){
			$sql=$sql.$key."='".$value."'";
		}
		$rs=mysqli_query($this->con,$sql);
		return $rs;

	}

	/*end of function*/
	/*Update data*/
	public function update_data($data){
		$this->table_name=$data['table'];
		$sql="update ".$this->table_name." set ";
		$sql1=" where ";
		$count=count($data[0]);
		$i=1;
		foreach($data[0] as $key=>$value){
			if($i==1){
				$sql1=$sql1.$key."='".$value."'";
			}
			elseif($i==$count){
				$sql=$sql.$key."='".$value."'";
			}
			else{
				$sql=$sql.$key."='".$value."',";
			}
			$i++;
		}
		$sql=$sql.$sql1;
		return mysqli_query($this->con,$sql);
	}
	/*end of function*/
	/*delete _data*/
	public function delete_data($data){
		$this->table_name=$data['table'];
		$sql="delete from ".$this->table_name." where ";
		foreach($data[0] as $key=>$value){
			$sql=$sql.$key."='".$value."'";
		}
		return mysqli_query($this->con,$sql);
	}
	/*end*/

	/*file_save_data*/
	public function file_save_data($data_Array){
		$ext=strstr($data_Array[1]['image']['name'],".");
		$image1="pics/".rand(00000,99999)."_".microtime(true).$ext;
		if($ext==".jpg" || $ext==".png" || $ext==".jpeg"){
			if($data_Array[1]['image']['size']<=1000000){
				move_uploaded_file($data_Array[1]['image']['tmp_name'], $image1);
				$image=array("image"=>"$image1");
				$data_save=array("table"=>$data_Array['table']);
				$data=array_merge($data_Array[0],$image);
				array_push($data_save,$data);
				return $this->insert_data($data_save);


			}
			else{
				return "Please Choose Right Size";
			}

		}
		else{
			return "Please Choose Right Format";
		}
	}
	/*end*/
	/*login _check*/
	public function login_check($data){
		$this->table_name=$data['table'];
		$sql="select * from ".$this->table_name. " where ";
		$i=1;
		foreach($data[0] as $key=>$value){
			if($i==count($data[0])){
			$sql.=$key."='".$value."'";
			}
			else{
			$sql.=$key."='".$value."' and ";
			}
			$i++;
		}
		//echo $sql;die();
		return mysqli_query($this->con,$sql);
	}
	//end
}


?>