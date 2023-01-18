<?php
$link = mysqli_connect("localhost", "root", "", "gym", 3306);
mysqli_set_charset($link, "utf8");
    session_start();
    $idC = $_POST["idC"];


    echo $id_token;
    $query = mysqli_query($link,"DELETE FROM `trener` WHERE `id` = $idC");
    header('Location:../templates/treneradm.php');
?>