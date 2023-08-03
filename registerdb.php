<?php
    require_once 'dbconnect.php';
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
        $sql="SELECT idklienta FROM klienci WHERE login='$login'";
        $rezults=mysqli_query($polaczenie, $sql);
        if($rezults!=""){
           echo "This login is already used";
           header('Location:register.php');
           exit();
        }
        $sql="SELECT idklienta FROM klienci WHERE email='$email'";
        $rezults=mysqli_query($polaczenie, $sql);
        if($rezults!=""){
            echo "This email is already used";
            header('Location:register.php');
            exit();
        }

        /*$sql="INSERT INTO klienci VALUES(NULL,'$name','$surname','$login','$passwordc','$email')";
        mysqli_query($polaczenie, $sql);*/
        header('Location:index.php');
        exit();
    }