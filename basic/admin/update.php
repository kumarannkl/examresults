<?php
$rollno = $_GET["rollno"];
$year = $_GET['year'];
$name = $_GET["name"];
$english = $_GET["english"];
$tamil = $_GET["tamil"];
$maths = $_GET["maths"];
$science = $_GET["science"];
$social = $_GET["social"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected succesfully";

//var_dump($connection);
$sql = "UPDATE marks SET rollno='$rollno', year='$year', student_name='$name', english='$english', tamil='$tamil',
maths='$maths', science='$science', social='$social' WHERE rollno='$rollno'";
//$sql = "SELECT * FROM  marks ";
//var_dump($sql);
if(mysqli_query($connection, $sql)){
    echo"Updated successfully";
    header("Location:studentlist.php");
} else {
    echo "Error updating database";
} 
//$row = mysqli_fetch_assoc($result);


mysqli_close($connection);

?>