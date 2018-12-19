<?php
include_once('config.php');
session_start();

$user_check =$_SESSION['login_user'];
$sql = mysqli_query($db,"Select username from Users where username='$user_check");
$row =mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session =$row['username'];
if(!isset($_SESSION['login_user'])){
	header("location:login.php");
}
?>