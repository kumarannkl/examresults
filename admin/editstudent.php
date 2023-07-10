<?php
//var_dump($_POST);


$rollno = $_GET["rollno"];
/*$year = $_GET['year'];
$name = $_GET["name"];
$english = $_GET["english"];
$tamil = $_GET["tamil"];
$maths = $_GET["maths"];
$science = $_GET["science"];
$social = $_GET["social"];*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected succesfully";
if (isset($_POST['submit'])) {
    echo "Submitted successfully";
    $rollno = $_POST['rollno'];
    $year = $_POST['year'];
    $name = $_POST['name'];
    $tamil = $_POST['tamil'];
    $english = $_POST['english'];
    $maths = $_POST['maths'];
    $science = $_POST['science'];
    $social = $_POST['social'];
  $sql="UPDATE marks SET rollno='$rollno', year='$year', student_name='$name', english='$english',tamil='$tamil',
  maths='$maths', science='$science', social='$social' WHERE rollno='$rollno'"; 
 //echo $sql;    
$result = mysqli_query($connection,$sql);
if($result){
   // header("Location.studentlist.php");
}
}

//var_dump($connection);
//$sql = "UPDATE marks SET rollno=$rollno, year=$year, student_name=$name, english=$english, tamil=$tamil,
//maths=$maths, science=$science, social=$social ";
$sql = "SELECT * FROM  marks WHERE rollno='$rollno'";
//echo $sql;
//var_dump($sql);
$result = mysqli_query($connection, $sql);
//var_dump($result);
$row = mysqli_fetch_assoc($result);
//var_dump($row);


mysqli_close($connection);

?>
<html>

<head>
    <style>
        .header {
            border: 1px solid red;
            background-color: paleturquoise;
            text-align: center;
            height: 75px;
        }

        .content {
            border: 1px solid red;
            margin: auto;
            height: calc(100vh - 75px);
        }

        .form {
            margin: auto;
            padding: 1px 100px 0px 230px;
            background-color: #f2f2f2;
        }

        /* input[type=submit]:hover {
            background-color: black;
        }*/

        /*.form {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;

        }*/

        input[type=text],
        select {
            width: 50%;
            padding: 8px 20px;
            margin: auto;
            border: 1px solid #ccc;
            border-radius: 1px;
            /*  box-sizing: border-box;*/
        }

        .submit {
            background-color: #4CAF50;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 1px;
            cursor: pointer;
        }

        .cancel {
            background-color: red;
            color: white;
            padding: 8px 20px;
            border: none;
            border-radius: 1px;
            cursor: pointer;
        }
    </style>
</head>
<div class="header">
    <h2>Edit student marks here</h2>
</div>
<div class="content">
    <div class="form">
        <div class="form">

            <form action="" method="post">
                <?php /*

           $row = mysqli_fetch_assoc($result);
           */?>

                <div class="field"> <label for="rollno" style="color:brown">Rollno:</label>
                    <input type="text" id="rollno" name="rollno" value=<?php echo $row['rollno'] ?>>
                </div>
                <div class="field"><label for="year" style="color:brown">Year :</label>
                    <input type="text" id="year" name="year" value=<?php echo $row['year'] ?>>
                </div>
                <div class="field"> <label for="name" style="color:brown">Name:</label>
                    <input type="text" id="name" name="name" value=<?php echo $row['student_name'] ?>>
                </div>
                <div class="field"> <label for="tamil" style="color:brown">Tamil :</label>
                    <input type="text" id="tamil" name="tamil" value=<?php echo $row['tamil'] ?>>
                </div>
                <div class="field"><label for="english" style="color:brown">English :</label>
                    <input type="text" id="english" name="english" value=<?php echo $row['english'] ?>>
                </div>
                <div class="field"><label for="maths" style="color:brown">Maths :</label>
                    <input type="text" id="maths" name="maths" value=<?php echo $row['maths'] ?>>
                </div>
                <div class="field"><label for="science" style="color:brown">Science:</label>
                    <input type="text" id="science" name="science" value=<?php echo $row['science'] ?>>
                </div>
                <div class="field"><label for="social" style="color:brown">Social:</label>
                    <input type="text" id="social" name="social" value=<?php echo $row['social'] ?>>
                </div>
                <div>

                    <input type="submit" value="submit" class="edit" name="submit">

                    <?php
                    if (isset($_GET['submit'])) {
                        echo "Submitted successfully";
                        // header("Location:update.php");
                    }
                    ?>
                    <input type="button" value="cancel" class="cancel">
                </div>

        </div>
    </div>
</div>

</form>




</html>