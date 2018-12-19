<?php
require_once("config.php");

$sql ="UPDATE information SET Name="jesika" WHERE id=1";
if($con->query($sql)=== TRUE){
	echo "Record update successfully";

}else{
	echo "Error updating record:".$con->error;
}
$con->close();
?>