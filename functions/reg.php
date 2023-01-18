<?php
$link = mysqli_connect("localhost", "root", "", "gym", 3306);
mysqli_set_charset($link, "utf8");
    $lg = $_POST["lg"];
    $email = $_POST["eme"];
    $pas = $_POST["ps1"];
    $query1 = mysqli_query($link,"SELECT `id` FROM `users` WHERE `login` = '$lg' and `pass` = '$pas'"); // повторение
    $row = mysqli_fetch_assoc($query1);
    if($row['id'] != '')  {$_SESSION['id_token'] = $row['id']; header("Location: ../templates/log.html");  }
    else{
    $query = mysqli_query($link,"INSERT INTO `users`( `login`, `email`, `pass`) VALUES ('$lg','$email','$pas')");
    $query1 = mysqli_query($link,"SELECT `id` FROM `users` WHERE `login` = '$lg' and `pass` = '$pas'"); // повторение
    $_SESSION['id_token'] = $row['id'];
    echo $row;
    if($query) header("Location: ../templates/profile.php");
    }

    ?>