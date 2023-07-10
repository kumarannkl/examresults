<?php

$error = '';
/*
 we are using isset to check whether the page is opened by entering submit button or using url
 */
if (isset($_POST['username'])) {

    $login_name = $_POST['username'];
    $login_pass = $_POST['password'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "result";

    // Create connection
    $connection = mysqli_connect($servername, $username, $password, $dbname);

    //Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM user where username = '$login_name'";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    
    if ($count > 0) {
        /* fetches one row of data from the result set and returns it as an associative array*/
        $row = mysqli_fetch_assoc($result);

        if ($login_pass == $row['password']) {
             header("Location:studentlist.php");
        } else {
            $error = "Invalid password";
        }
    } else {
        $error = "Invalid User Name";
    }

    mysqli_close($connection);

}


?>

<html>

<head>
    <style>
        .header {
            border: 5px groove red;
            background-color: antiquewhite;
            outline: 5px groove gray;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: teal;
        }

        .content {
            border: 5px groove red;
            height: 60%;
            padding: 130px 100px 25px 90px;
            background-color: antiquewhite;
            outline: 5px groove gray;


        }

        .form {
            background-color: lightgray;
            width: 250px;
            border: 5px groove red;
            outline: 5px groove gray;
            padding: 70px;
            margin: auto;


        }

        .error {
            text-align: center;
            margin: auto;
            /* margin: 10px; */
            margin-bottom: 10px;
            font-size: 18px;
            border: 1px solid gray;
            width: 400px;
            padding: 10px;
        }

        
    </style>
</head>

<body>
    <div class="header">
        <h1> Exam Result</h1>
    </div>

    <div class="content">

        <?php if($error) { ?>
        <div class="error">
            <?php echo $error ?>
        </div>
        <?php } ?>

        <div class="form">
            <form action="" method="post">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password"><br><br>
                <input type="submit" value="submit">
            </form>
        </div>
    </div>


</body>

</html>