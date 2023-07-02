<?php
 
 var_dump($_GET);

 $roll_no=$_GET['roll_no'];

 echo "<br> $roll_no";

$mark=[];

$marks1 = array("Tamil" => "89", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks2 = array("Tamil" => "88", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks3 = array("Tamil" => "87", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks4 = array("Tamil" => "86", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks5 = array("Tamil" => "85", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks6 = array("Tamil" => "84", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks7 = array("Tamil" => "83", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks8 = array("Tamil" => "82", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks9 = array("Tamil" => "81", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );
$marks10 = array("Tamil" => "80", "English" => "90","Maths" => "91" , "Science" => "88" , "Social" => "96" );

$students=array(
    '1001' => $marks1,
    '1002' => $marks2,
   '1003' => $marks3,
   '1004' => $marks4,
   '1005' => $marks5,
   '1006' => $marks6,
   '1007' => $marks7,
   '1008' => $marks8,
   '1009' => $marks9,
   '1010' => $marks10
);
$names=array(
    '1001' => 'Kumaran',
    '1002' => "Shravan",
    '1003' => "Shakthi",
    '1004' => "Sanjith",
    '1005' => "Soujith",
    '1006' => "Naveen",
    '1007' => "Siddharth",
    '1008' => "Sanjay",
    '1009' => "Ashwin",
    '1010' => "Dhanish",
);

function displayMarks($mark,$names) {
    echo "<h3> ". $names . "</h3>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Subject</th>";
    echo "<th>Marks</th>";
    echo "</tr>";

     foreach ($mark as $subject => $value){
        echo "<tr>";
        echo "<td>$subject</td>";
        echo "<td>$value</td>";
        echo "</tr>";
     }
     echo "</table>";
}
?>
<?php
$mark = null;

if(isset($students[$roll_no])) {
    $mark = $students[$roll_no];
}
?>
<html>
    <head>
        <style>
        table {
            border:border-collapse;
            width:500px;
        }
        td,th{
            border: 2px solid black;
            text-align: left;
            padding: 6px;
        }
         </style>
         </head>
         <body>
            <h1>12th SUBJECTWISE MARKS</h1> 
            <?php
            if($mark==null) {?>
                <h3>Entered roll no does not exist</h3>
                <?php
            }
            else {
                displayMarks($mark,$names[$roll_no]);
            }
            ?>
            <a href="index1.html">back</a>
        </body>
        </html>

      

        


