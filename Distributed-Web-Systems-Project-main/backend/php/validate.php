<?php
    include "config.php";
    
    session_start();
    $sql = "SELECT count(*) as count from Tenants where Email=? and Password=?";
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $param = [$user, $pass];
    $result = sqlsrv_query($conn, $sql, $param);
    $row = sqlsrv_fetch_array($result);
    $count = $row['count'];
    
    if($count > 0) {
        $_SESSION['Username'] = $user;
        echo 1;
    } 
    else {
        echo 0;
    }
?>
