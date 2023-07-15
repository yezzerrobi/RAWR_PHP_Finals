<?php
    session_start();
    require_once('connect.php');
    if (isset($_POST['username']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    
        $uname = $_POST['username'];
        $password = $_POST['password'];
    
        if (empty ($uname)){
            header("Location: login.php?error=User Name is required");
            exit();
        }elseif(empty ($password)){
            header("Location: login.php?error=Password is required");
            exit();
        }else{
            $sql = "SELECT * FROM user_record WHERE username = '$uname' 
            AND password = '$password'";
    
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
    
               if($row ['username'] === $uname && $row ['password'] === $password){
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['userid'] = $row['userid'];
                header("Location: index.php");
                
                exit();
               }
            }else{
                header("Location: login.php");
                exit();
            }
    
        }
    }else {
        header("Location: logging.php");
        exit();
    }
?>
