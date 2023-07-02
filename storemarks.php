<?php
$rollno=$_GET["rollno"];
$year=$_GET['year'];
$name=$_GET["name"];
$english=$_GET["english"];
$tamil=$_GET["tamil"];
$maths=$_GET["maths"];
$science=$_GET["science"];
$social=$_GET["social"];
 




// var_dump($_GET);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

//var_dump($connection);
 //Check connection
if (!$connection) {
   die("Connection failed: " . mysqli_connect_error());
 }


 $sql = "INSERT INTO  marks(rollno,year,student_name, tamil, english, maths, science, social )
 VALUES ('$rollno', '$year','$name',$tamil,$english,$maths,$science,$social);";
 //echo $sql;

if(mysqli_query($connection, $sql)){
  echo "Data inserted successfully";
} else {
  echo "Error inserting data" . mysqli_error($connection);
}

mysqli_close($connection);
?>               