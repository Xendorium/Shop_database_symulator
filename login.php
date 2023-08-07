<?php
session_start();
$_SESSION['error_']='';
require_once 'dbconnect.php';
$connection = mysqli_connect($host,$user,$password);
if($connection->connect_errno!=0) {
    echo "Error" .$connection->connect_errno;
}
else {
    mysqli_select_db($connection, $database);
    $login = $_POST['login'];
    $passordc = $_POST['password'];
    $sql="SELECT*FROM klienci WHERE login='$login'AND haslo='$passordc'";
    $results=mysqli_query($connection,$sql);
    if(mysqli_num_rows($results)>0){
        $row=mysqli_fetch_assoc($results);
        $name=$row['imie'];
        echo "Hello ".$name."!</br>";
        echo "What do you want to do?</br>";
        echo '<form action="change_data.php" method="post">';
        echo    '<input type="submit" value="Change data">';
        echo '</form>';
        echo '<form action="index.php" method="post">';
        echo    '<input type="submit" value="Make an order">';
        echo '</form>';
        echo '<form action="index.php" method="post">';
        echo    '<input type="submit" value="Logout">';
        echo '</form>';
        mysqli_close($connection);
    }
    else{
        $_SESSION['error_']='Incorrect login or password';
        header('Location:index.php');
        exit();
    }
}