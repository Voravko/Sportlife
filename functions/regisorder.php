<?php
$link = mysqli_connect("localhost", "root", "", "gym", 3306);
mysqli_set_charset($link, "utf8");
session_start();
    $id_ord = $_SESSION['ord'];
    $id_us = $_SESSION['id_token'];
    $pl = $_POST['pl'];
    if($pl==1)
    $query2 = mysqli_query($link,"DELETE FROM `clasess` WHERE `id` = '$id_ord'");
    else
    {
    $pl1 = $pl-1;
    $query1 = mysqli_query($link,"UPDATE `clasess` SET `places`='$pl1' WHERE `id` = '$id_ord'");
    }




echo $id_ord." ".$id_us;
   $query = mysqli_query($link,"INSERT INTO `trans_ord`(`id_class`, `id_user`) VALUES ('$id_ord','$id_us')");

   header("Location: ../templates/ord.php");



    ?>