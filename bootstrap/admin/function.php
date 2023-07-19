<?php 
     
/**
 * Authenticate username and password
 * @Input: username, password
 * @Return boolean
 */
function login($login_name, $login_pass) {
  global $servername, $username, $password, $dbname;

  $connection = mysqli_connect($servername, $username, $password, $dbname);


  $sql = "SELECT * FROM user WHERE username='$login_name'";
  $result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if ($login_pass == $row['password']) {
        return true;
      //header("Location:showmarks.php");
    }
    
    
    
  } 
  mysqli_close($connection);
  return false;
}
function delete($rollno){
  global $connection,$servername,$username,$password,$dbname,$sql,$result;

  $connection = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "DELETE FROM marks WHERE rollno='$rollno'";
  $result=mysqli_query($connection,$sql);

  $message="";
     $error="";
    if(isset($_GET['action'])){

    
     $rollno=$_GET['rollno'];
     $sql1 = "DELETE  FROM marks WHERE rollno=$rollno";
//var_dump($sql);
if (mysqli_query($connection, $sql1)) {
  return true;
    
} 

mysqli_close($connection);
return false;
    }



}
?>