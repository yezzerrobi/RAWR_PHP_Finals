<?php
    session_start();
    require_once('connect.php');

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['userid'] = $_POST['userid'];
    $_SESSION['email'] = $_POST['email'];
    $confpass = $_POST['confpass'];
    $password = $_POST['password'];
    $uname = $_POST['username'];
    $email = $_POST['email'];

    if(!preg_match("/^([a-zA-Z0-9]+[a-zA-Z0-9\.\,\-\s]*)$/", $_POST['username'])) {
        $_SESSION['error_uname'] = "User Name is invalid.";
    }

    if(!preg_match("/^([a-zA-Z0-9\.\,\-\s]*)$/", $_POST['password'])) {
        $_SESSION['error_password'] = "Password is invalid.";
    }

    if($password != $confpass){
        $_SESSION['error_confpass'] = "Password do not match.";
    }else{
        $_SESSION['true_confpass']= "Password match.";
    }

    if(!preg_match("/^([a-zA-Z0-9\_\.]*(@gmail.com|@yahoo.com|@outlook.com))$/", $_POST['email'])) {
        $_SESSION['error_email'] = "email is invalid.";
    }

        $sql_u = "SELECT * FROM user_record WHERE username = '$uname'";
        $sql_e = "SELECT * FROM user_record WHERE email = '$email'";
    
        $result_u = mysqli_query($conn, $sql_u);
        $result_e = mysqli_query($conn, $sql_e);
    
        
    if (mysqli_num_rows($result_u) > 0){
        $_SESSION['uname_taken'] = "User Name already taken"; 	
    }
    if (mysqli_num_rows($result_e) > 0) {
        $_SESSION['email_taken'] = "Email already taken"; 
    }
 
    if(isset($_SESSION['error_uname']) || isset($_SESSION['error_password']) ||  isset($_SESSION['error_confpass']) 
    || isset($_SESSION['error_email']) || isset($_SESSION['uname_taken']) || isset($_SESSION['email_taken'])) {
        header("Location: registration.php");
    } else {
      $_SESSION['true_confpass'];

            if(isset($_POST['save'])){
                
                $uname = $_POST['username'];
                $password = $_POST['password'];
                $userid = $_POST['userid'];               
                $email = $_POST['email'];     
        
                $query = "INSERT INTO user_record (username, password, userid, email) 
                VALUES ('$uname', '$password', '$userid', '$email')";
        
                $result = $conn->query($query);
        
                if(!$result){
                    die("Query failed: " . $conn->error);
                }else{
                    header("Location: success.php");
                }
            }
    }
?>