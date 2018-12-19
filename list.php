<?php
//connection to db
include_once("config.php");

//assign value
$Name =$_REQUEST['Name'];
$Address =$_REQUEST['Address'];
$Sex =$_REQUEST['Sex'];
$Salary =$_REQUEST['Salary'];

$sql =mysqli_query($mysqli, "INSERT INTO information (Name,Address,Sex,Salary) VALUES('$Name','$Address','$Sex','$Salary')");
$result =mysqli_query($con,$sql);

$sql ="SELECT * FROM information";
$result =mysqli_query($con,$sql);
?>

<html>
<head>
	<title>Display the data stored</title>
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Sex</th>
			<th>Salary</th>
		</tr>
		<?php while($array =mysqli_fetch_row($result))
		?>
		<tr>
			
			<td><?echo $array[0];?</td>
			<td><?echo $array[1;?</td>
			<td><?echo $array[2;?</td>
			<td><?echo $array[3;?</td>
        </tr>

    <?php endwhile; ?>
    <?php myswli_free_result($result);?>
    <?php mysqli_close($con);?>
    </table>

</head>
<body>

</body>
</html>