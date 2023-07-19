<?php include 'header.php' ?>
<?php

$error = "";
if (isset($_POST['username'])) {
  $login_name = $_POST['username'];
  $login_password = $_POST['password'];

  if(login($login_name, $login_password)) {
    header("Location:showmarks.php");
  } else {
    $error = "Invalid Username or Password";
  }

  
}

?>

<div class="container-fluid justify-content-center col-md-4">
  <?php if ($error) {
    ?>
    <div class="alert alert-warning text-center">
      <strong>Warning!
        <?php echo $error ?>
      </strong>
    </div>
  <?php } ?>
  <form action="" class="align-items-center border p-5 my-5" method="post">
    <div class="mb-3 mt-2">
      <label for="username">Username:</label><br>
      <input type="username" id="username" class="form-control" placeholder="Enter your username here"
        name="username"><br>
    </div>
    <div class="mb-3">
      <label for="password">Password:</label><br>
      <input type="password" id="password" class="form-control" placeholder="Enter your password here"
        name="password"><br>
    </div>
    <button type="submit" class="btn btn-primary d-flex justify-content-center">Submit</button>
  </form>
  <?php include 'footer.php' ?>

</div>
</div>