<?php 
     $servername="";
     $username="root";
     $password="";
     $dbname="result";

     $connection=mysqli_connect($servername,$username,$password,$dbname);

     $sql= "SELECT * FROM marks";
     $result=mysqli_query($connection,$sql);
     $count=mysqli_num_rows($result);
     $message="";
     $error="";
    if(isset($_GET['action'])){

    
     $rollno=$_GET['rollno'];
     $sql1 = "DELETE  FROM marks WHERE rollno=$rollno";
//var_dump($sql);
if (mysqli_query($connection, $sql1)) {
    $message="Data deleted successfully";
} else {
    $error="Error deleting data";
}}
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
    <div class="container-fluid ">
      <header class="d-flex flex-wrap justify-content-center py-4 mb-4 border-bottom text-white bg-primary">
        <h1> Student's marks</h1>
      </header>
    </div>
  </div class="container-fluid">
<div class="container col-8">
  <?php if($message) {?>
       <div class="alert alert-success">
        <strong>Success!</strong><?php echo $message?>
  </div>
  <?php } ?>
  <?php if($error){?> 
       <div class="alert alert-warning">
        <stdong>Warning!</strong><?php echo $error?>   
  </div>
    <?php  } ?>
  

<a href="addstudent.html" type="button" class="btn btn-primary">ADD STUDENTS MARK</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th class="text-center bg-primary text-white">rollno</th>
        <th class="text-center bg-primary text-white">year</th>
        <th class="text-center bg-primary text-white">student_name</th>
        <th class="text-center bg-primary text-white">tamil</th>
        <th class="text-center bg-primary text-white">english</th>
        <th class="text-center bg-primary text-white">maths</th>
        <th class="text-center bg-primary text-white">science</th>
        <th class="text-center bg-primary text-white">social</th>
        <th class="text-center bg-primary text-white"></th>
        <th class="text-center bg-primary text-white"></th>
      </tr>
    </thead>
    <?php if(($count>0)){
    while($row=mysqli_fetch_assoc($result)){
    ?>
    <tbody>
      <td><?php echo $row['rollno']?></td>
      <td><?php echo $row['year']?></td>
      <td><?php echo $row['student_name']?></td>
      <td><?php echo $row['tamil']?></td>
      <td><?php echo $row['english']?></td>
      <td><?php echo $row['maths']?></td>
      <td><?php echo $row['science']?></td>
      <td><?php echo $row['social']?></td>
      <td><a href="editstudent.php?rollno=<?php echo $row['rollno']?>">EDIT</a></td>
      <td><a href="showmarks.php?rollno=<?php echo $row['rollno']?>&action=delete">DELETE</a></td>
   <?php  } 
        }
        ?>
    </tbody>
    </tr>
  </table>
  </div>
</div>
<div class="container-fluid">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top fixed-bottom mx-3 bg-primary">
      <p class="col-md-4 mb-0 mx-3 text-white text-secondary ">&copy; 2023 Company,Inc</p>
  </footer>
      </div>
  
  </main>
  </body>
  </html>
    