<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sklep internetowy</title>
</head>
<body>
<h1>Zaloguj sie</h1>
<form action="zaloguj.php" method="post">
    Login: <br/> <input type="text" name="login"> <br/>
    Hasło: <br/> <input type="password" name="haslo"> <br/><br/>
    <input type="submit" value="Zaloguj się">
</form>
<form action="zarejestruj.php" method="post">
    <input type="submit" value="Zarejestruj się">
</form>
</body>
</html>