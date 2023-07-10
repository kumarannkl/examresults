<?php

$usernames=$_POST["username"];
$password=$_POST['password'];
 




// var_dump($_GET);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

//var_dump($connection);
 //Check connection
if (!$connection) {
   die("Connection failed: " . mysqli_connect_error());
 }


 $sql = "INSERT INTO  user(username,passwords)
 VALUES ('$usernames', '$password')";
 //echo $sql;

if(mysqli_query($connection, $sql)){
  echo "Data inserted successfully";
} else {
  echo "Error inserting data" . mysqli_error($connection);
}

mysqli_close($connection);
?>               
