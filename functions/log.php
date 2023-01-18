<?php 
// error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "gym",3306);
mysqli_set_charset($link, "utf8");

$log = $_POST["lg"];
$pas = $_POST["ps1"];



$query = mysqli_query($link,"SELECT `id` FROM `users` WHERE `login` = '$log' and `pass` = '$pas'");
$row = mysqli_fetch_assoc($query);
session_start();
echo $row['id'];
if($row['id'] != '') { $_SESSION['id_token'] = $row['id']; header("Location: ../templates/profile.php");}

if($row['id'] == ''){ 
$query1 = mysqli_query($link,"SELECT `id` FROM `admin` WHERE `login` = '$log' and `pass` = '$pas'");
$row1 = mysqli_fetch_assoc($query1);
if($row1['id'] != '') { $_SESSION['id_token'] = 'admin'; header("Location: ../templates/adminpanel.php");}
if($row1['id'] == '') {  header("Location: ../templates/log.html");}

}

?>