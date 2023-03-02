<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student_records";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$name = $_POST["name"];
$maths_marks = $_POST["maths"];
$science_marks = $_POST["science"];
$english_marks = $_POST["english"];

// Insert data into table
$sql = "INSERT INTO students (name, maths_marks, science_marks, english_marks)
VALUES ('$name', $maths_marks, $science_marks, $english_marks)";

if (mysqli_query($conn, $sql)) {
    echo "Record added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Query database for student records
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each student
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $maths_marks = $row["maths_marks"];
        $science_marks = $row["science_marks"];
        $english_marks = $row["english_marks"];

        $gpa = ($maths_marks + $science_marks + $english_marks) / 3.0;


        echo "Name: " . $name . "<br>";
        echo "Maths GPA: " . $maths_marks . "<br>";
        echo "Science GPA: " . $science_marks . "<br>";
        echo "English GPA: " . $english_marks . "<br>";
        echo "CGPA: " . $gpa . "<br>";
        echo "<br>";
    }
} else {
    echo "No records found.";
}

mysqli_close($conn);
?>
