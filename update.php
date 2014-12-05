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




$Newname ='arjun';
$sql= "SELECT * FROM `studentdata` where name like '$Newname'";
$result = mysqli_query($conn,$sql);

echo "<table>";
while ($row=mysqli_fetch_array($result))
{
echo "<tr>";
	echo "<td>".$row["name"]."</td>";
	echo "<td>".$row["parentname"]."</td>";
	echo "<td>".$row["email"]."</td>";
	
echo "</tr>";
}
echo "</table>"

?>
<form action="testo.php" method="post">

		Student name<input type="text" name="name"><br>
		Parent name <input type="text" name="parentName"><br>
		Mobile number<input type="text" name="mobileNumber"><br>
		<input type="submit">
	</form>	
