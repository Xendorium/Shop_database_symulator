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
        echo "Witaj ".$name."!";





        mysqli_close($connection);
    }
    else{
        $_SESSION['error_']='Incorrect login or password';
        header('Location:index.php');
        exit();
    }
}