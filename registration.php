<?php
session_start();
require_once('connect.php');
if(isset($_POST['save'])){
    
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['userid'] = $_POST['userid'];
    $_SESSION['email'] = $_POST['email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon Registration</title>
    <link rel="stylesheet" type="text/css" href="pokemon.css">
</head>
<body>
    <div class = "form_register">
        <form action="validate.php" method = "post">
            <h2>Sign Up</h2>

            <label for="">User Name</label>
            <input type="text" name = "username" placeholder = "Enter User Name...">
            <br>
            <label for="">Email Address</label>
            <input type="email" name = "email" placeholder = "Enter Email Address...">
            <br>
            <label for="">Password</label>
            <input type="password" name = "password" placeholder = "Enter Password...">
            <br>
            <label for="">Confirm Password</label>
            <input type="password" name = "confpass" placeholder = "Confirm Password...">
            <br>
            <label for="">User ID</label>
            <input type="text" name = "userid" placeholder = "Enter User ID...(e.g.#### #### ####)">
            <br>
            <h4>Have an account Already? Log in now!</h4>
            <a class = "addnew" href="login.php">Log In</a>
            <button type="submit" name = "save">Sign Up</button>
        </form>
    </div> 
</body>
</html>