<?php
    require_once('connect.php');

    $query = "SELECT * FROM  user_record";

    $result = $conn->query($query);

    if(!$result) {
        die("Query failed: " . $conn->error);
    }else{
        $rows = $result->fetch_all(MYSQLI_ASSOC);
    }
?>