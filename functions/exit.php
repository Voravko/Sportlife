<?php
    session_start();
    unset($_SESSION['id_token']);
    session_destroy();
    header("Location: ../index.php");
?>