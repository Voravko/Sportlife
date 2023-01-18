<?php
$link = mysqli_connect("localhost", "root", "", "gym", 3306);
mysqli_set_charset($link, "utf8");
    session_start();
    $id_token = $_SESSION['id_token'];
    $nm = $_POST["name1"];
    $surn = $_POST["surn"];
    $wei = $_POST["wei"];
    $hei = $_POST["hei"];
    $goal = $_POST["goal"];
    echo $id_token;
    $query = mysqli_query($link,"UPDATE `users` SET `name`='$nm',`surname`='$surn',`weight`='$wei',`height`='$hei',`goal`='$goal' WHERE `id` = '$id_token'");
    header('Location:../templates/profile.php');
?>