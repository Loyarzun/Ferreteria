<?php
include('config.php');
$db = mysqli_connect($host ,$user,$password,$dbname);

session_start();
 
$session = $_SESSION['adminid'];
if (count($session == 1)){
	foreach ($session as $ses){
		$adminid = $ses;
	}
}
 
$ses_sql = mysqli_query($db,"select adminid, name from admin where adminid = '$adminid' ");

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
 
$login_session = $row['name'];
 
if(!isset($_SESSION['adminid'])){
	header("location:logadminin.php");
}
?>