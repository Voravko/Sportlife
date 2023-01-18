<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="style11.css" />
  <link href="/styles/verif1.css" rel="stylesheet" />
  <link href="/styles/isid1.css" rel="stylesheet" />
  <link href="/styles/style1.css" rel="stylesheet" />
  <link href="/styles/order11.css" rel="stylesheet" />

 


  <title>Document</title>
</head>

<body class="main-theme-black">
<?php 
    $link = mysqli_connect("localhost", "root", "", "gym",3306);
    mysqli_set_charset($link, "utf8");
    $row = [];
    session_start();
    $id_token = $_SESSION['id_token'];
    $query = mysqli_query($link, "SELECT `id_class` FROM `trans_ord` where `id_user` = '$id_token'");

    

    ?>
  <div class="header">
    <div class="main-header-block">
      <i><img src="../img/logoWhite.svg" /></i>
    </div>
    <p class="reg"></p>
    <a href="../index.php">
      <div class="button">
        <p>Назад</p>
      </div>
    </a>
  </div>

  <div class="menu">
    <div class="menu-el">
      
      <p><a href = "profile.php">Профиль</a></p>

    </div>
    <div class="menu-el">
      <div class="active-el"></div>
      <p><a href = "ord.php">Запись</a></p>

    </div>
    <form class="menu-el" action="../functions/exit.php" method="get">
      <button class="exit-button">Выход</button>
</form>


  </div>

  <div class="container-portfolio">
  <?php while( $row2 = mysqli_fetch_assoc($query)): ?>  
      
    <?php 
      $idC = $row2['id_class'];?> 
      
    <?php 
      $query1 = mysqli_query($link, "SELECT  `id`,`data`, `name`, `time`, `places`, `trener`, `dis` FROM `clasess` where `id` = '$idC'");?> 

          <?php while( $row = mysqli_fetch_assoc($query1)): ?>   
            
            <form class = "full-order-card" action="../functions/delord.php" method="post" >
            <input value = " <?php echo $row['id']?>" type = "hidden" name = "idO"/>
            <input value = " <?php echo $row['places']?>" type = "hidden" name = "pl"/>


              <div class = "order-card-data"><?php echo $row['data']?></div>
            <div class ="order-card">
                <div class = "order-card-conteiner">
                    <div class = "order-card-name"><?php echo $row['name']?></div>
                    <p class ="order-card-conteiner-time"><?php echo $row['time']?></p>
                </div>    
                <div class = "order-card-dis"><?php echo $row['dis']?></div>

                <div class = "order-card-conteiner">

                    <p class = "order-card-conteiner-place"><?php echo $row['places']?> мест осталось</p>
                    <p class = "order-card-conteiner-trener"><?php echo $row['trener']?></p>
                </div>
            <button class = "main-button">Отменить</button>
               
            </div>
          </form>
         
        <?php endwhile; ?>
        <?php endwhile; ?>

  </div>
</body>

</html>