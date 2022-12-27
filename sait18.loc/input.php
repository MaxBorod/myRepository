<?php
$host='localhost';
$database='27_test_27';
$user='root';
$password='';

$link=mysqli_connect($host,$user,$password,$database)or die("ошибка".mysqli_error($link));
if(isset($_POST['FIO'])&&isset($_POST['Login'])&&isset($_POST['Password']))  {
    $FIO=$_POST['FIO'];
    $Login=$_POST['Login'];
    $Password=$_POST['Password'];
   

    if($FIO&&$Login&&$Password){
        $query ="insert into input(FIO,Login,Password) 
        values('$FIO','$Login','$Password')";
        $result = mysqli_query($link,$query) or die("Ошибка".mysqli_error($link));
        echo"Вы добавили участника";
    }
}

?>

<form action="index.php" method="POST">
            <input type="submit" value="Вернутся">
        </form>