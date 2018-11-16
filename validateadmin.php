<?php
session_start();

include 'config.php';

$db = mysqli_connect($host ,$user,$password,$dbname);

$mail = $_POST['mail'];
$pass = $_POST['pass'];

if($mail != "" && $pass != ""){

	$sql = "SELECT adminid FROM admin WHERE mail = '$mail' AND password = '$pass'";
	$result = mysqli_query($db,$sql);

	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	if($count == 1) {
		foreach ($result as $res){
			$_SESSION['adminid'] = $res;
			 
			header("location: welcome.php");
		}
	}else {
		$error = "Your Login Name or Password is invalid";
		echo $error;
	}
}
else{
	echo 'Llene los campos requeridos';
}
?>