<?php
$rollno=$_GET['rollno'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


<?php
    
     if (isset($_POST['submit'])) {
     // echo "Submitted successfully";
     header("Location:showmarks.php");
      $rollno = $_POST['rollno'];
      $year = $_POST['year'];
      $name = $_POST['name'];
      $tamil = $_POST['tamil'];
      $english = $_POST['english'];
      $maths = $_POST['maths'];
      $science = $_POST['science'];
      $social = $_POST['social'];
    $connection=mysqli_connect($servername,$username,$password,$dbname);
    $sql="UPDATE marks SET rollno='$rollno',year='$year',student_name='$name',tamil='$tamil',english='$english',maths='$maths',
    science='$science',social='$social' WHERE rollno='$rollno'";
    $result=mysqli_query($connection,$sql);
     }
     $sql = "SELECT * FROM  marks WHERE rollno='$rollno'";
     $result = mysqli_query($connection, $sql);
     $row = mysqli_fetch_assoc($result);
     mysqli_close($connection);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <main>
        <div class="container-fluid">
            <header class="d-flex flex-wrap justify-content-center py-4 mb-4 border-bottom text-white bg-primary">
                <h1> Exam results</h1>
            </header>
        </div>
        <div class="container-fluid justify-content-center col-md-4">
        <form action="" class="align-items-center border p-5 my-5" method="post">
        <div class="mb-3 mt-2">
          <label for="rollno">Rollno:</label><br>
          <input type="text" id="rollno" class="form-control" value=<?php echo $row['rollno'] ?> name="rollno"><br>
        </div>
        <div class="mb-3">
            <label for="year">Year:</label><br>
            <input type="text" id="year" class="form-control" value=<?php echo $row['year'] ?> name="year"><br>
          </div>
          <div class="mb-3">
            <label for="name">Name:</label><br>
            <input type="text" id="name" class="form-control" value=<?php echo $row['student_name'] ?> name="name"><br>
          </div>
          <div class="mb-3">
            <label for="tamil">Tamil:</label><br>
            <input type="text" id="tamil" class="form-control" value=<?php echo $row['tamil'] ?> name="tamil"><br>
          </div>
          <div class="mb-3">
            <label for="english">English:</label><br>
            <input type="text" id="english" class="form-control" value=<?php echo $row['english'] ?> name="english"><br>
          </div>
          <div class="mb-3">
            <label for="maths"></label>Maths:<br>
            <input type="text" id="maths" class="form-control" value=<?php echo $row['maths'] ?> name="maths"><br>
          </div>
          <div class="mb-3">
            <label for="science">Science:</label><br>
            <input type="text" id="science" class="form-control" value=<?php echo $row['science'] ?> name="science"><br>
          </div>
          <div class="mb-3">
            <label for="social">Social:</label><br>
            <input type="text" id="social" class="form-control" value=<?php echo $row['social'] ?> name="social"><br>
          </div>
        <button type="submit" value="submit" class="btn btn-primary d-flex justify-content-center" name="submit">Submit</button>
        <?php
                    if (isset($_GET['submit'])) {
                       echo "Submitted successfully";
                    }
                    ?>
      </form>
      </div>
      <div class="container-fluid">
        <footer
          class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top fixed-bottom mx-3 bg-primary">
          <p class="col-md-4 mb-0 mx-3 text-white text-secondary ">&copy; 2023 Company,Inc</p>
        </footer>
      </div>
    </main>
</body>

</html>
