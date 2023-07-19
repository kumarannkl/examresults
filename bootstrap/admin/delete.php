<?php
$rollno = $_GET['rollno'];
//var_dump($_GET);


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$connection = mysqli_connect($servername, $username, $password, $dbname);
$sql = "DELETE  FROM marks WHERE rollno=$rollno";
var_dump($sql);
if (mysqli_query($connection, $sql)) {
    header("Location:showmarks.php");
} else {
    echo "error deleting data";
}
mysqli_close($connection);
?>