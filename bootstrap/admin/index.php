<?php
$error="";
 if(isset($_POST['username'])){
  $login_name=$_POST['username'];
  $login_password=$_POST['password'];

  $servername="localhost";
  $username="root";
  $password="";
  $dbname="result";

  $connection=mysqli_connect($servername,$username,$password,$dbname);


  $sql="SELECT * FROM user WHERE username='$login_name'";
  $result=mysqli_query($connection,$sql);
  
  if(mysqli_num_rows($result) > 0 ){
    $row=mysqli_fetch_assoc($result);
     if($login_password==$row['password']){
      header("Location:showmarks.php");
     }else {
      $error="Invalid password";
     }
  }else {
     $error="No data entered";
  }
  mysqli_close($connection);
 }

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
        <h1 class="display-4"> Admin section </h1>
      </header>
    </div>
    <div class="container-fluid justify-content-center col-md-4">
      <?php if($error){
        ?><div class="alert alert-warning text-center">
          <strong>Warning!<?php echo $error?></strong>
        </div>
      <?php }?>
      <form action="" class="align-items-center border p-5 my-5" method="post">
        <div class="mb-3 mt-2">
          <label for="username">Username:</label><br>
          <input type="username" id="username" class="form-control" placeholder="Enter your username here" name="username"><br>
        </div>
        <div class="mb-3">
            <label for="password">Password:</label><br>
            <input type="password" id="password" class="form-control" placeholder="Enter your password here" name="password"><br>
          </div>
        <button type="submit" class="btn btn-primary d-flex justify-content-center">Submit</button>
      </form>
      <div class="container-fluid">
        <footer
          class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top fixed-bottom mx-3 bg-primary">
          <p class="col-md-4 mb-0 mx-3 text-white text-secondary ">&copy; 2023 Company,Inc</p>
        </footer>
      </div>
    </div>