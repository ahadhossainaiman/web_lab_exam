<?php
// Connect to the database
$host = "localhost";
$user = "root";
$pass = "";
$db = "myformdb";

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];
$checkbox = isset($_POST['checkbox']) ? 'yes' : 'no';
$multiple = implode(",", $_POST['languages']);
$radio = $_POST['gender'];
$listbox = implode(",", $_POST['country']);
$password = $_POST['password'];

// Insert the data into the database
$sql = "INSERT INTO myformtable (name, email, textarea, checkbox, multiple, radio, listbox, password) VALUES ('$name', '$email', '$textarea', '$checkbox', '$multiple', '$radio', '$listbox', '$password')";

if (mysqli_query($conn, $sql)) {
	echo "Record added successfully.";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Retrieve the data from the database and display it on another page
$sql = "SELECT * FROM myformtable";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	echo "<table border=2>";
	echo "<tr><th>Name</th><th>Email</th><th>Text Area</th><th>Checkbox</th><th>Multiple Checkboxes</th><th>Radio Buttons</th><th>List Box</th><th>Password</th></tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['email'] . "</td>";
		echo "<td>" . $row['textarea'] . "</td>";
		echo "<td>" . $row['checkbox'] . "</td>";
		echo "<td>" . $row['multiple'] . "</td>";
		echo "<td>" . $row['radio'] . "</td>";
		echo "<td>" . $row['listbox'] . "</td>";
		echo "<td>" . $row['password'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
} else {
	echo "0 results";
}



mysqli_close($conn);
?>

