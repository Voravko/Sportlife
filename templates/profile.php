<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <link href="/styles/verif1.css" rel="stylesheet" />
  <link href="/styles/isid1.css" rel="stylesheet" />
 


  <title>Document</title>
</head>

<body class="main-theme-black">
<?php
    $link = mysqli_connect("localhost", "root", "", "gym", 3306);
    mysqli_set_charset($link, "utf8");
    session_start();
    $id_token = $_SESSION['id_token'];
    $query = mysqli_query($link, "SELECT * FROM `users` WHERE `id` = '$id_token'");
    $row = mysqli_fetch_assoc($query);
    ?>
  <div class="header">
    <div class="main-header-block">
      <i><img src="../img/logoWhite.svg" /></i>
    </div>
    <p class="reg"><span>Профиль - <span><?php echo $row['name']?></span></p>
    <a href="../index.php">
      <div class="button">
        <p>Назад</p>
      </div>
    </a>
  </div>

  <div class="menu">
    <div class="menu-el">
      <div class="active-el"></div>
      <p><a href = "profile.php">Профиль</a></p>

    </div>
    <div class="menu-el">
      <p><a href = "ord.php">Запись</a></p>

    </div>
    <form class="menu-el" action="../functions/exit.php" method="get">
      <button class="exit-button">Выход</button>
</form>

<form class="container-portfolio" action="../functions/addprofile.php" method="post">
    
    <div class="input-container">
      <input type="text" name="name1" value="<?php echo $row['name'] ?>" required="" />
      <label>Имя</label>
   
    </div>
    <div class="input-container">
      <input type="text" name="surn" required="" value="<?php echo $row['surname'] ?>"/>
      <label>Фамилия</label>
    </div>
    <div class="input-container">
      <input type="text" name="wei" required="" value="<?php echo $row['weight'] ?>"/>
      <label>Вес</label>

    </div>
    <div class="input-container">
      <input type="text" name="hei" required="" value="<?php echo $row['height'] ?>"/>
      <label>Рост</label>
     
    </div>
    <div class="input-container">
      <input type="text" name="goal" required="" value="<?php echo $row['goal'] ?>"/>
      <label>Цель</label>
      
    </div>
    <div class="input-container">
      <input type="text" name="abon" value="1" required="" value="1"/>
      <label>Абонемнт</label>
  
    </div>
    <button class = "main-func-button">Сохранить</button>
</form>

  </div>



</body>

</html>