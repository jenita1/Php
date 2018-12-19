<? php
//database connection 

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','admin');
define('DB_NAME','trainee');

//connect to MYSQL Database
$con =mysqli_connect('localhost','root','admin','trainee');

//Check connection
if($conn ===false){
die("Error:Could not connect.".mysqli_connect_error());
}
?>
