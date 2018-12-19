
	<?php
	
	
	if(isset($_POST['Submit'])) {	
		
		 $Name = $_POST["Name"];
		 $Address = $_POST["Address"];
	     $Sex = $_POST["Sex"];
		 $Salary = $_POST["Salary"];

	
		// checking empty fields
		if(empty($Name) || empty($Address) || empty($Salary)) || empty($Sex) {
					
			if(empty($Name)) {
				echo "name field is empty";
			}
			
			if(empty($Address)) {
				echo "address field is empty";
			}
			
			if(empty($Sex)) {
				echo "salary field is empty";
			}
			if(empty($Salary)) {
				echo "salary field is empty";
			}
			}

			//db connection	
		$db_server ="localhost";
		$db_username ="root";
		$db_password = "admin";
		$db_name ="trainee";


			
	 $conn =mysqli_connect($db_server,$db_username,$db_password,$db_name);        
	 if(!$conn){
	  die("connection failed".mysqli_connect_error());
	} else{
		echo "connected";

	}
	ini_set('display_errors', 1); 

	  $sql = "INSERT INTO information (Name,Address,Sex,Salary)VALUES('Name','Address','Sex','Salary')";
		if(mysqli_query($conn,$sql)){
			echo "New record created";
		}else{
			echo "Error in add".$sql . "<br>". mysqli_error($conn);
		}
				
}

		

	
?>
<html>
<head>
	<title>Add Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="50%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="Name"></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="Address"></td>
			</tr>
			<tr> 
				<td>Sex</td>
				<td><input type="text" name="Sex"></td>
			</tr>
			<tr> 
				<tr> 
					<td>Salary</td>
					<td><input type="text" name="Salary"></td>
				</tr>
				<tr> 
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
</body>
</html>





