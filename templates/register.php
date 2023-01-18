<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style1.css" />
  <link href="/styles/verif1.css" rel="stylesheet" />
  <link href="/styles/style11.css" rel="stylesheet" />
  <link rel="stylesheet" href="/styles/order.css" />
  <meta charset="UTF-8" />

  <title></title>
</head>

<body class="main-theme-black">
  <?php
    $link = mysqli_connect("localhost", "root", "", "gym", 3306);
    mysqli_set_charset($link, "utf8");
    session_start();
    $id_token = $_SESSION['id_token'];
    $idO = $_POST['idO'];
    $query = mysqli_query($link, "SELECT `id`, `data`, `name`, `time`, `places`, `trener`, `dis` FROM `clasess` where `id` = '$idO'");
    $query1 = mysqli_query($link, "SELECT `id` FROM `trans_ord` WHERE `id_class` = '$idO' and `id_user` = '$id_token'");
    $row1 = mysqli_fetch_assoc($query1);

    $row = mysqli_fetch_assoc($query);
    ?>
  <div class="header">
    <a href="../index.php">
      <img src="../img/logoWhite.svg" />
    </a>
    <p class="reg">Подтверждение записи</p>
    <a href="../index.php">
      <div class="button">
        <p>Назад</p>
      </div>
    </a>
  </div>




  <form class="main-form-verificat" method="post" action="../functions/regisorder.php">
  <input value = " <?php echo $row['places']?>" name = "pl" type = "hidden"/>

   
      <div class="full-order-card">
        <?php $_SESSION['ord'] = $row['id']; ?>
        <div class="order-card-data">
          <?php echo $row['data']?>
        </div>
        <div class="order-card">
          <div class="order-card-conteiner">
            <div class="order-card-name">
              <?php echo $row['name']?>
            </div>
            <p class="order-card-conteiner-time">
              <?php echo $row['time']?>
            </p>
          </div>
          <div class="order-card-dis">
            <?php echo $row['dis']?>
          </div>

          <div class="order-card-conteiner">

            <p class="order-card-conteiner-place">
              <?php echo $row['places']?> мест осталось
            </p>
            <p class="order-card-conteiner-trener">
              <?php echo $row['trener']?>
            </p>
          </div>

        </div>
        <?php 
        if( $id_token == '')
        {
          header("Location: ./reg.html");
        }
        else{
    if($row1['id'] == "")
    echo ' <a href="./register.php"><button class="verificat-button"><p class="verificat-button-text">Запись</p></button></a>' ;
    if($row1['id'] != "")
    echo '<a href="./ord.php"><H2 class="discription-block-p">Вы уже записаны!</H2></a>';
        }
    ?>
      </div>
    </br>
    </br>
 
    
    </a>
  </form>
  <div class="pict">
    <div class="discription-block-about">
      <div class="discription-block-img">
        <img src="../img/text.svg" />
      </div>
      <p class="discription-block-p">
      Наша философия – полная самостоятельность и независимость клиента. Покупка абонемента не потребует даже посещения зала – он приобретается через интернет, а в личном кабинете можно отслеживать оставшееся время и продлевать его.

      </p>
    </div>
  </div>


  <script src="../js/script.js"></script>
</body>

</html>