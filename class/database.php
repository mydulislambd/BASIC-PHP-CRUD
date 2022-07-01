<?php 


class Database
{
	
	public function __construct()
	{
		$host = "localhost";
		$user = "root";
		$pass = "";
		$db = "crud";
		$this->link = mysqli_connect($host, $user, $pass, $db);
	}


/*data insert*/

public function add_data($data){
	$name 		= $data['name'];
	$email 		= $data['email'];
	$address 	= $data['address'];
	$phone 		= $data['phone'];

	$query = "INSERT INTO `users`(`name`, `email`, `address`, `phone`) VALUES ('$name', '$email', '$address', '$phone')";
	$result = mysqli_query($this->link, $query)or die("Query Faild");

	if($result){
		$msg = "Data Inseart Success";
		return $msg;
	}else{
		$msg = "Data Inseart Faild";
		return $msg;
	}

}




/*Data Show*/

public function data_show(){

	$query = "SELECT * FROM `users`";

	$result = mysqli_query($this->link, $query);
	return $result; 
}






}

