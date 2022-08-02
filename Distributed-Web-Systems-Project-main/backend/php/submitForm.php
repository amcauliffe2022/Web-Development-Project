<?php
    include "config.php";
    
    $email = $_POST["email"];
    $unit = $_POST["unit"];
    $phone = $_POST["phone"];
    $descr = $_POST["descr"];
    $param = ["4/17/2021", $email, $unit, "PENDING", $phone, $descr];
    $isql = "INSERT INTO MaintenanceReports (Date, Tenant, Room, Status, Phone_Number, Description) 
             VALUES (?, ?, ?, ?, ?, ?)";
    $result = sqlsrv_query($conn, $isql, $param);
    if ($result) {  
        echo 1;  
    } 
    else {  
        echo 0;   
    }
?>
