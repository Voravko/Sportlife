<?php
$link = mysqli_connect("localhost", "root", "", "gym", 3306);
mysqli_set_charset($link, "utf8");
session_start();
    $id_token = $_SESSION['id_token'];
    $id_us = $_SESSION['id_token'];
    $idO = $_POST['idO'];
    $pl = $_POST['pl'];

  
    $pl1 = $pl+1;
    $query1 = mysqli_query($link,"UPDATE `clasess` SET `places`='$pl1' WHERE `id` = '$idO'");
    $query = mysqli_query($link,"DELETE FROM `trans_ord` WHERE `id_class` = '$idO' and `id_user` = '$id_token'");
    header("Location: ../templates/ord.php");
    ?>