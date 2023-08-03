<?php
    require_once 'dbconnect.php';
    require_once 'register.php';
    $polaczenie = mysqli_connect($host,$user,$password);
    if($polaczenie->connect_errno!=0) {
        echo "Error" .$polaczenie->connect_errno;
    }
    else{
        mysqli_select_db($polaczenie, $database);
        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $login=$_POST['login'];
        $passwordc=$_POST['password'];
        $email=$_POST['email'];
        header('Location:index.php');
        exit();
    }