<?php
    session_start();

    unset($_SESSION['id'] );
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    session_destroy();
    
    header("location:index.php");
?>