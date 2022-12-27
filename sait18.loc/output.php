<?php
$host='localhost';
$database='27_test_27';
$user='root';
$password='';
$link=mysqli_connect($host,$user,$password,$database)or die("ошибка".mysqli_error($link));
$query="select * from input";
$result = mysqli_query($link,$query) or die("Ошибка".mysqli_error($link));
print ("<p align=center><fonr face=verdana><b>Просмотр участников</b>
<table border=1 align=center width=70% cellpadding=8>
<tr bgcolor=#ffffcc align=center>
<td>Номер</td>
<td>ФИО</td>
<td>Логин</td>
<td>Пароль</td>
</tr>");
while ($a=mysqli_fetch_array($result))
{$id=$a['id'];
$FIO=$a['FIO'];
$Login=$a['Login'];
$Password=$a['Password'];
 print("
    <td>$id</td>
    <td>$FIO</td>
    <td>$Login</td>
    <td>$Password</td>

    ");
   
    print("</tr>");
}
print ("</table>");
mysqli_close($link);

?>

<form action="index.php" method="POST">
            <input type="submit" value="Вернутся">
        </form>

