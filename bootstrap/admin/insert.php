<?php
$rollno=$_POST["rollno"];
$year=$_POST['year'];
$name=$_POST["name"];
$tamil=$_POST["tamil"];
$english=$_POST["english"];
$maths=$_POST["maths"];
$science=$_POST["science"];
$social=$_POST["social"];
?>

<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="result";

$connection=mysqli_connect($servername,$username,$password,$dbname);

$sql="INSERT INTO marks(rollno,year,student_name,tamil,english,maths,science,social)
VALUES ($rollno,$year,'$name',$tamil,$english,$maths,$science,$social) ";

if(mysqli_query($connection,$sql)){
    header("Location:showmarks.php");
}else{
    echo "Error updating data" . mysqli_error($connection);
}
mysqli_close($connection);
?>