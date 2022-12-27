<?php
require 'connect.php';
$num = $_REQUEST['radio'];
$mysqli_select = "SELECT * FROM my_pacient WHERE id=$num";
$result = mysqli_query($link,$mysqli_select);
$row = mysqli_fetch_array($result);
$mysqli_select1 = "SELECT date,comments,next_date FROM visits WHERE num=$num";
$result1 = mysqli_query($link,$mysqli_select1);
$row1 = mysqli_fetch_array($result1);
printf("<h1>%s %s</h1><p><i>Адрес: %s<br>Телефон: %s</i></p>",$row['name'],$row['last_name'],$row['adress'],$row['telefon']);
do{
printf("<table border='1'><tr><td><b>Дата визита:</b></td><td>%s</td></tr>
<tr><td><b>Комментарий врача:</b></td><td>%s</td></tr>
<tr><td><b>Дата следующего визита:</b></td><td>%s</td></tr>
</table><br>", $row1['date'],$row1['comments'],$row1['next_date']);	
}
while($row1 = mysqli_fetch_array($result1))
?>
<a href="index.php">Вернуться в меню</a>