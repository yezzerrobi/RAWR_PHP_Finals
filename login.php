<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="pokemon.css">
</head>
<body>
    <div class = "form_register">
        <form action="processlogin.php" method = "post">
            <h2>LOGIN</h2>

            <label for="">User Name</label>
            <input type="text" name = "username" placeholder = "Enter User Name...">
            <br>
            <label for="">Password</label>
            <input type="password" name = "password" placeholder = "Enter Password...">
            <br>
            <h4>Don't have an account yet? Sign up now!</h4>
            <a class = "addnew" href="registration.php">Sign Up</a>
            <button type="submit">Log In</button>
        </form>
    </div> 
</body>
</html>