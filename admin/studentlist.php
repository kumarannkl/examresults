<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$connection = mysqli_connect($servername, $username, $password, $dbname);

//var_dump($connection);
$sql = "SELECT * FROM marks";


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
        }

        .header {
            border: 1px solid red;
            background-color: red;
            text-align: center;
        }

        .content {
            border: 1px solid red;
            height: 120%;

        }

        .table {
            width: 50%;
            padding: 25px 100px 25px 330px;
        }

        .add-button {
            display: inline-block;
            /* height: 40px; */
            /* width: 180px; */
            padding: 10px;
            background-color: blue;
            color: white;
            text-decoration: none;
            font-weight: bold;

        }

        /*    .edit-button{
display:block;
    /* height: 40px; */
        /* width: 180px; */
        /* background-color: blue;
    color: white;
    text-decoration: none;
    
    
    }*/
    </style>
</head>

<body>

    <div class="header">
        <h1>See stored marks here</h1>
    </div>
    <div class="content">
        <div class="table">
            <a href="addstudent.html" class="add-button">ADD STUDENT MARK</a>

            <table>
                <tr>
                    <th>rollno</th>
                    <th>year</th>
                    <th>studentname</th>
                    <th>tamil</th>
                    <th>english</th>
                    <th>maths</th>
                    <th>science</th>
                    <th>social</th>
                    <th>
                    <th>
                </tr>

                <?php
                if (($count) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        //var_dump($row);
                        ?>
                        <tr>
                            <td>
                                <?php echo $row['rollno'] ?>
                            </td>
                            <td>
                                <?php echo $row['year'] ?>
                            </td>
                            <td>
                                <?php echo $row['student_name'] ?>
                            </td>
                            <td>
                                <?php echo $row['tamil'] ?>
                            </td>
                            <td>
                                <?php echo $row['english'] ?>
                            </td>
                            <td>
                                <?php echo $row['maths'] ?>
                            </td>
                            <td>
                                <?php echo $row['science'] ?>
                            </td>
                            <td>
                                <?php echo $row['social'] ?>
                            </td>
                            <td><a href="editstudent.php?rollno=<?php echo $row['rollno'] ?>">EDIT</a></td>
                            <td><a href="delete.php?rollno=<?php echo $row['rollno'] ?>">Delete</a></td>

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