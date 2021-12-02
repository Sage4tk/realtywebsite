<?php
    session_start();
    session_destroy();
    header("Location: /realtywebsite/login.php");
?>