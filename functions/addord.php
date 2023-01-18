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
    $abon = $_POST["abon"];

    echo $id_token;
    $query = mysqli_query($link,"INSERT INTO `clasess`(`data`, `name`, `time`, `places`, `trener`, `dis`) VALUES ('$nm','$surn','$wei','$hei','$goal','$abon')");
    header('Location:../templates/adminpanel.php');
?>