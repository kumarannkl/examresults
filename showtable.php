<?php

$usernames=$_POST["username"];
$password=$_POST['password'];
 



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";

$connection = mysqli_connect($servername, $username, $password, $dbname);

//var_dump($connection);
$sql = "SELECT * FROM user WHERE username='$usernames'  " ;
$result = mysqli_query($connection, $sql);
$count = mysqli_num_rows($result);

?>




<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }.header{
        border:1px solid red;
        background-color:red;
        text-align: center;
    }
    .content{
        border:1px solid red;
        height:86%;
    }
    .table{
        width:50%;
        padding:25px 100px 25px 330px;
    }
    .add-button{
        display: inline-block;
    /* height: 40px; */
    /* width: 180px; */
    padding: 10px;
    background-color: blue;
    color: white;
    text-decoration: none;
    font-weight: bold;
    
    }
    </style>
</head>

<body>
    
        <div class="header">
            <h1>See stored datas here</h1>
        </div>
        <div class="content">
            <div class="table">
            
            <table>
                <tr>
                    <th>username</th>
                    <th>displayname</th>
                </tr>

                <?php
                if (($count) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        //var_dump($row);
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['username'] ?>
                            </td>
                            <td>
                                <?php echo $row['displayname'] ?>
                            </td>
                        </tr>
                    <?php
                    } // close while
                } // close if
                
                ?>
    </table>

    
   
    </div>
    </div>
</body>

</html>