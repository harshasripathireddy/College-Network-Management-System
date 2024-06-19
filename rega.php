<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		$servername = "localhost";
		$username = "root";
		$password = '';
		$db_name = "cnms";
		$conn = mysqli_connect("localhost", "root", "", "cnms");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
	
		$visitor_name = $_REQUEST['visitor_name'];
		$visitor_email = $_REQUEST['visitor_email'];
		$concerned_department = $_REQUEST['concerned_department'];
		$concerned_reason = $_REQUEST['concerned_reason'];
		$concerned_device = $_REQUEST['concerned_device'];
		
		$sql = "INSERT INTO registereddata VALUES ('$visitor_name',
			'$visitor_email','$concerned_department','$concerned_reason','$concerned_device')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h1>request sent successfully.</h1>";
                 header("location:http://localhost/project/x.php"); 
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		?>
	</center>
</body>

</html>
