<?php
    include "config.php";

    // Check user login or not
    if(!isset($_SESSION['uname'])){
        header('Location: index.php');
    }
?>
