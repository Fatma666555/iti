<?php
echo $_POST['fn'];

$info =  [
    "First Name" => $_POST['fn'],
    "Last Name" => $_POST['ln'],
    "Address" => $_POST['msg'],
    "Contry" => $_POST['select'],
    "Gender" => $_POST['F'],


];
$Skills = $_POST['skills'];
echo "<table border='1'>";
foreach ($info as $key => $value) {
    echo "<tr>";

    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "<tr><td > skills</td><td>";
foreach($Skills as $Skill){
    echo $Skill." - ";
}
echo "</td></tr>";
echo "</table>";