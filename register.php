<?php
    session_start();
    $_SESSION['error_']="";
    require_once 'dbconnect.php';
    $connection = mysqli_connect($host,$user,$password);
    if($connection->connect_errno!=0) {
        echo "Error" .$connection->connect_errno;
    }
    else{
        mysqli_select_db($connection,$database);

        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $login=$_POST['login'];
        $passwordc=$_POST['password'];
        $email=$_POST['email'];

        if($name==""||$surname==""||$login==""||$passwordc=""||$email==""){
            $_SESSION['error']="Fill all fields";
            mysqli_close($connection);
            header('Location:form.php');
            exit();
        }
        $sql = "SELECT*FROM klienci WHERE login='$login' OR email='$email'";
        $results=mysqli_query($connection,$sql);
        if(mysqli_num_rows($results)!=0){
            $_SESSION['error']="Person with that login or email exist";
            mysqli_close($connection);
            header('Location:form.php');
            exit();
        }
        if(!strpos($email, "@")){
            $_SESSION['error']="Incorrect email";
            mysqli_close($connection);
            header('Location:form.php');
            exit();
        }
        $sql="INSERT INTO klienci VALUES(NULL,'$name','$surname','$login','$passwordc','$email')";
        mysqli_query($connection, $sql);
        mysqli_close($connection);
        header('Location:index.php');
        exit();
    }