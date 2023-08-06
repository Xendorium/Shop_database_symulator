<?php
    session_start();
?>
<form action="register.php" method="post">
Name: <br/> <input type="text" name="name" autocomplete="off"> <br/>
Surname: <br/> <input type="text" name="surname" autocomplete="off"> <br/>
Login: <br/> <input type="text" name="login" autocomplete="off"> <br/>
Password: <br/> <input type="password" name="password" autocomplete="off"> <br/>
Email: <br/> <input type="text" name="email" autocomplete="off"> <br/>
    <input type="submit" value="Register">
</form>
<?php
    $error=$_SESSION['error'];
    echo '<span style="color:red">'.$error.'</span>';
?>