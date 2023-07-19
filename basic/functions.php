<?php
function displayMarks($stu) {
    $stu_name = $stu['name'];
    $stu_mark = $stu['marks'];
    
    echo "<h3> " . $stu_name . " </h3>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Subject</th>";
    echo "<th>Marks</th>";
    echo  "</tr>";

    foreach($stu_mark as $subject  => $value)      
    { 
    
       echo "<tr>";
       echo "<td>$subject </td>";
       echo "<td>$value </td>";
       echo "</tr>"; 
    } 
    

    echo "</table>";
    
}?>