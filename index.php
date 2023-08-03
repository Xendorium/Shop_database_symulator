<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shop</title>
</head>
<body>
<h1>Log in</h1>
<form action="login.php" method="post">
    Login: <br/> <input type="text" name="login"> <br/>
    Password: <br/> <input type="password" name="password"> <br/><br/>
    <input type="submit" value="Log in">
</form>
<form action="register.php" method="post">
    <input type="submit" value="Register">
</form>
</body>
</html>
