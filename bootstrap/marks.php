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
                <h1> Exam results</h1>
            </header>
        </div>
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
        <div class="container-fluid">
            <footer
                class="d-flex flex-wrap justify-content-between align-items-center py-3  border-top fixed-bottom mx-3 bg-primary">
                <p class="col-md-4 mb-0 mx-3 text-white text-secondary ">&copy; 2023 Company,Inc</p>
            </footer>
                </div>
                </body>
                </html>