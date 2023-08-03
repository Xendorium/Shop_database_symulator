
<form action="registerdb.php" method="post">
Name: <br/> <input type="text" name="name"> <br/>
Surname: <br/> <input type="text" name="surname"> <br/>
Login: <br/> <input type="text" name="login"> <br/>
Password: <br/> <input type="password" name="password"> <br/>
Email: <br/> <input type="text" name="email"> <br/>
    <input type="submit" value="Register">
</form>
<?php
    echo $_SESSION['error'];
    $_SESSION['error']="";
?>