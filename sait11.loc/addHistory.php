<?php
require 'connect.php';
$num = $_REQUEST['radio'];
$date = $_REQUEST['date'];
$comments = $_REQUEST['comments'];
$next_date = $_REQUEST['next_date'];
$mysqli_insert = "INSERT INTO visits(num,date,comments,next_date)". 
"VALUES('{$num}','{$date}','{$comments}','{$next_date}');";
mysqli_query($link,$mysqli_insert) or die ("<p>Ошибка вставки ".mysqli_error($link));
echo '<p>Запись успешно добавлена!</p>';
?>
<a href="index.php">Вернуться в меню</a>