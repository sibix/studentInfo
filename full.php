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
if(isset($_POST['name'])){ $student = $_POST['name']; }

$sql= "SELECT * FROM `studentdata`";
$result = mysqli_query($conn,$sql);	
echo "<table>";
while ($row=mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>".$row["name"]."</td>";
	echo "<td>".$row["parentname"]."</td>";
	echo "<td>".$row["email"]."&nbsp;&nbsp;<a href='#?$newName=$row['name']'>Edit</a>&nbsp;&nbsp;<a href='#''>Delete</a></td>";
	
echo "</tr>";
}
echo "</table>"
?>
