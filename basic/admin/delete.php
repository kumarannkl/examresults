<?php
$rollno=$_GET['rollno'];
//var_dump($rollno);

$servername="localhost";
$username="root";
$password="";
$dbname="result";

$connection = mysqli_connect($servername,$username,$password,$dbname);

$sql="DELETE FROM marks WHERE rollno='$rollno'";
//var_dump($sql);
  if(mysqli_query($connection,$sql))
  {
    echo " Record deleted successfully";
  } else {
    echo "Error deleting data:" . mysqli_error($connection);
  }  
    
  
  
?>
