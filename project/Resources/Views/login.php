<?php
if(isset($_SESSION['email'])){ //if login in session is not set
    header("Location: tasks");
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Page Title</title>
</head>
<body>
<form name="login-form" action="login" method="post">
    <label for="login"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="login" required>
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
</form>
</body>
</html>