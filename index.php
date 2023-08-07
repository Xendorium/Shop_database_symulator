<?php
    session_start();
    error_reporting(0);
    $_SESSION['error']='';
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
    Login: <br/> <input type="text" name="login" autocomplete="off"> <br/>
    Password: <br/> <input type="password" name="password" autocomplete="off"> <br/><br/>
    <input type="submit" value="Log in">
</form>
<form action="form.php" method="post">
    <input type="submit" value="Register">
</form>
</body>
</html>
<?php
$error=$_SESSION['error_'];
echo '<span style="color:red">'.$error.'</span>';
