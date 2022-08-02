<?php
    $server = "bandyl.database.windows.net";
    $info = array("Database"=>"bandyl-database", "UID"=>"bandyl", "PWD"=>"Yeet2021!");
    $conn = sqlsrv_connect($server, $info);
    
    if($conn == false) {
         echo "Connection to the database has failed. <br/>";
         die(print_r( sqlsrv_errors(), true));
    }
?>
