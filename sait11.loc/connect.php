<?php
$link=mysqli_connect("localhost","root","")
or die ("<p>Ошибка подключения к базе данных " .mysqli_error()."</p>");
mysqli_select_db($link,"ychet")
or die ("<p>Ошибка выбора базы данных " .mysqli_error($link). "</p>");
?>