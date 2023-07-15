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
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <?php
        include('header.php');
    ?>
    <div class = "cart">
        <div class = "form_register">
        <form action="/action_page.php" oninput="x.value=parseInt(a.value)+parseInt(b.value)" method = "post">
                <h2>Add to cart</h2>
                <label for="">User ID</label>
                <input type="hidden" name = "userid">
                <label for="">Amount</label>
                <input type="rad" name = "username" placeholder = "Enter User Name...">
                <br>
                0
                <input type="range" id="a" name="a" value="50">
                100 +
                <input type="number" id="b" name="b" value="50">
                =
                <output name="x" for="a b"></output>
                <br><br>
                <input type="submit" name = "add">
                </form>
            
            </form>
        </div> 
    </div>
    
    <?php
        include('footer.php');
    ?>
</body>
</html>