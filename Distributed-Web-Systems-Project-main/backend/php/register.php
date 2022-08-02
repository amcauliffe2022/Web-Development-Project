<?php
    include "config.php";
    
    session_start();
    $sql = "SELECT count(*) as count from Tenants where Email=? and Password=?";
    $name = $_POST["name"];
    $ruser = $_POST["ruser"];
    $rpass = $_POST["rpass"];
    $rpass2 = $_POST["rpass2"];
    
    if($rpass == $rpass2) {
        $param = [$ruser, $rpass];
        $result = sqlsrv_query($conn, $sql, $param);
        $row = sqlsrv_fetch_array($result);
        $count = $row['count'];
        
        if($count > 0) {
            $_SESSION['Username'] = $ruser;
            echo 0;
        }
        else {
            $isql = "INSERT INTO Tenants (Email, Name, Password) 
                    VALUES (?, ?, ?)";
            $param2 = [$ruser, $name, $rpass];
            $result = sqlsrv_query($conn, $isql, $param2);
            
            if ($result) { 
                $_SESSION['Username'] = $ruser; 
                echo 1;  
            } 
            else {  
                echo 0;   
            }
        }
    } 
    else {
        echo 3;
    }
?>
