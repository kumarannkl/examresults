<?php
//var_dump($_GET);
$rollno = $_GET['rollno'];
//var_dump($rollno);
//$mark = [];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$connection = mysqli_connect($servername, $username, $password, $dbname);
//var_dump($connection);
$sql = "SELECT * FROM marks WHERE rollno = '$rollno'";
$result = mysqli_query($connection, $sql);

//Check if result contains record.
?>
    <?php include'header.php'?>
        <div class="container-fluid">
            <div class="container col-4">
                <?php if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    //   var_dump($row);
                    $mark['name'] = $row['student_name'];
                    ?>

                    <h5 class="alert alert-primary text-center"><strong>Studentname:</strong><?php echo $row['student_name']?></h5>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center bg-primary text-white">Subject</th>
                                <th class="text-center bg-primary text-white">Marks</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                            <tr>
                                <td class="text-center text-dark">Tamil</td>
                                <td class="text-center text-dark">
                                    <?php echo $row['tamil'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-dark">English</td>
                                <td class="text-center text-dark">
                                    <?php echo $row['english'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-dark">Maths</td>
                                <td class="text-center text-dark">
                                    <?php echo $row['maths'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-dark">Science</td>
                                <td class="text-center text-dark">
                                    <?php echo $row['science'] ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center text-dark">Social</td>
                                <td class="text-center text-dark">
                                    <?php echo $row['social'] ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php } else {

                    ?>

                    <div class="alert alert-danger">
                        <strong>INFO!</strong>Entered roll no does not exist!
                    </div>

                <?php } ?>

                <a href="index.html" class="btn btn-primary">Back</a>
            </div>


        </div>

        </div>
        <?php include'footer.php'?>
                </body>
                </html>