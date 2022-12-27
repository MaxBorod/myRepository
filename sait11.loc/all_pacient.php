<?php
require 'connect.php';

$mysqli_select = "SELECT * FROM my_pacient";
$result = mysqli_query($link,$mysqli_select);
$row = mysqli_fetch_array($result);
do{
$id = $row['id'];
$name = $row['name'];
$last_name = $row['last_name'];
printf("<p><label><input type='radio' name='radio' id='radio' value='%s'>%s %s</label></p>",$id,$name,$last_name);	
}
while($row = mysqli_fetch_array($result));
?>