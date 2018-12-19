<?php
// including the database connection file
include_once("config.php");
if(isset($_POST['Submit']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$Name = mysqli_real_escape_string($mysqli, $_POST['Name']);
	$Address = mysqli_real_escape_string($mysqli, $_POST['Address']);
	$Salary = mysqli_real_escape_string($mysqli, $_POST['Salary']);	
	$Sex = mysqli_real_escape_string($mysqli, $_POST['Sex']);	
	
	// checking empty fields
	if(empty($Name) || empty($Address) || empty($Salary) || empty($Sex)) {	
			
		if(empty($Name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if(empty($Address)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}
		
		if(empty($Salary)) {
			echo "<font color='red'>Salary field is empty.</font><br/>";
		}
		
		if(empty($Sex)) {
			echo "<font color='red'>sex field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE information SET Name='$Name',Address='$Address',Salary='$Salary' WHERE id=$id");
		
		//redirectig to the display paddress. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM information WHERE id=$id");
while($res = mysqli_fetch_array($result))
{
	$Name = $res['Name'];
	$Address =$res['Address'];
    $Salary = $res['Salary'];
	$Sex = $res['Sex'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form username="form1" method="post" action="list.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" username="name" value="<?php echo $Name;?>"></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" username="address" value="<?php echo $Address;?>"></td>
			</tr>
			<tr> 
				<td>Sex</td>
				<td><input type="text" username="address" value="<?php echo $address;?>"></td>
			</tr>
			<tr> 
				<td>Salary</td>
				<td><input type="number" username="salary" value="<?php echo $salary;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" username="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="Submit" username="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>