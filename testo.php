<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "studentinfo";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password,$dbname);

			// Check connection
			if (!$conn) {
			    die("Connection failed: " . mysqli_connect_error());
			}
			echo "Connected successfully<br>";
			

			// sql to create table
/*$sql = "CREATE TABLE studentinfo (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
name VARCHAR(30) NOT NULL,
parentname VARCHAR(30) NOT NULL,
email VARCHAR(50))";

if (mysqli_query($conn, $sql)) {
    echo "Table MyStdudents created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
*/

		//storing values in  form to variables

		if(isset($_POST['name'])){ $student = $_POST['name']; } 
		if(isset($_POST['parentName'])){ $parent = $_POST['parentName']; } 
		if(isset($_POST['mobileNumber'])){ $mobile = $_POST['mobileNumber']; } 


		// Inserting values to the table

		$sql = "INSERT INTO studentdata(name,parentname,email)
VALUES ('$student','$parent','$mobile')";

if (mysqli_query($conn, $sql)) {
    echo "New student data saved sccessfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>




