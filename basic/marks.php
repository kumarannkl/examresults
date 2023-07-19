<?php
//include "students.php";
include "functions.php";

//var_dump($_GET);

$roll_no = $_GET['roll_no'];

//echo "<br> $roll_no";

$mark = [];





//var_dump($names);

//var_dump($students);

/*
if($roll_no == '1001') {
    $mark = $marks1;
} elseif($roll_no == '1002') {
    $mark = $marks2;
} elseif($roll_no == '1003') {
    $mark = $marks3;
} elseif($roll_no == '1004') {
    $mark = $marks4;
} elseif($roll_no == '1005') {
    $mark = $marks5;
} elseif($roll_no == '1006') {
    $mark = $marks6;
} elseif($roll_no == '1007') {
    $mark = $marks7;
} elseif($roll_no == '1008') {
    $mark = $marks8;
} elseif($roll_no == '1009') {
    $mark = $marks9;
} elseif($roll_no == '1010') {
    $mark = $marks10;
} else {
    $mark = [];
}
*/

/*switch($roll_no) {
    case "1001":
        $mark= $marks1;
        break;
    case "1002":
        $mark= $marks2;
        break;
    case "1003":
        $mark= $marks3;
        break;
    case "1004":
        $mark= $marks4;
        break;
    case "1005":
        $mark= $marks5;
        break;                    
    case "1006":
        $mark= $marks6;
        break;
    case "1007":
        $mark= $marks7;
        break;
    case "1008":
        $mark= $marks8;
        break;
    case "1009":
        $mark= $marks9;
        break;
    case "1010":
        $mark= $marks10;
        break;
    default:
        $mark = [];
                                                                                                                                                                                    
}*/
?>


<?php

$mark = null;
$name = "";
//Check if the marks exists for given roll no.  If so, assign to marks.
/*if (isset($students[$roll_no])) {
    $mark = $students[$roll_no]['marks'];
    $name = $students[$roll_no]['name'];
}*/



?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "result";

$connection = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM marks Where rollno='$roll_no'";
//echo $sql;
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    //var_dump($row);
    $mark['marks'] = $row;
    $mark['name'] = $row['student_name'];

    


    //     $mark = [];
//    $mark['Tamil'] = $row['tamil'];
//    $mark['English'] = $row['english'];
//    $mark['Maths'] = $row['maths'];
//    $mark['Science'] = $row['science'];
//    $mark['Social'] = $row['social'];


}
?>
<html>

<head>
    <style>
       table {
            border-collapse: collapse;
            width: 500px;
            font-family: Arial, Helvetica, sans-serif;
        }

        td,
        th {
            text-align: left;
            padding: 6px;
            border: 2px solid black;
        }

        .header {
            border:5px groove red;
            text-align:center;
            background-color:antiquewhite;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            color:teal;
        }
        .content {
            border:5px groove red;
            height:85%;
            background-color:antiquewhite;
           
        }
        .table
        {
            padding: 25px 100px 25px 390px;
            
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Exam Result</h1>
    </div>
    <div class="content">
        <div class="table">

            <?php if ($mark == null) { ?>
                <h3> Entered roll no does not exist </h3>

            <?php
            } else {

                // displayMarks($students[$roll_no]);
                displayMarks($mark);

            } ?>
            <a href="index.html">back</a>
        </div>
    </div>
</body>

</html>