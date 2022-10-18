<?php
require 'conf.php';
if(isset($_POST["submit"]))
{
    $username=$_POST["username"];
    $password=$_POST["password"];
    $query="INSERT INTO register(username,password) VALUES ('$username','$password')";
    mysqli_query($conn,$query);
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">username</label>
        <input type="text" name="username">
        <label for="">Password</label>
        <input type="text" name="password">
        <button name="submit" type="submit">Register</button>
    </form>
    
</body>
</html>