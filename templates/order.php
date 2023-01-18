<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="/styles/style11.css" />
    <link rel="stylesheet" href="/styles/order11.css" />
    <link rel = "stylesheet" href = "/styles/verif1.css"/>
  </head>
  <body>

  <?php 
    $link = mysqli_connect("localhost", "root", "", "gym",3306);
    mysqli_set_charset($link, "utf8");
    $row = [];
    $query = mysqli_query($link, "SELECT `id`, `data`, `name`, `time`, `places`, `trener`, `dis` FROM `clasess` where places > 0 ");
    session_start();
    $id_token = $_SESSION['id_token'];
    ?>
    <div class="lending-order">
      <header class="main-header">
        <div class="main-header-block"></div>
        <a href = "../index.php"><div class="main-logo">
          <img src="../img/logo.svg" />
        </div>
      </a>
      <ul class="main-menu">
          <a href = "./serv.php"><li class="menu-el">Услуги</li></a>
          <a href = "./order.php"><li class="menu-el">Занятия</li></a>
          <?php 
          session_start();
          $id_token = $_SESSION['id_token'];
          
          if($id_token == '')
          {
          echo '<a href = "./reg.html"><li class="menu-el">Регистрация</li></a>';
          echo '<a href = "./log.html"><li class="menu-el">Вход</li></a>';
          }
          else{
          echo '<a href = "./profile.php"><li class="menu-el">Профиль</li></a>';

          }

          ?>
        </ul>
        <div class="main-button-profile">
          <p class="main-profile"></p>
        </div>
      </header>
      <div class="main-header"></div>
      <div class="rotate-main-conteiner">
        <p class="main-text">Sportlife Group</p>
        <p class="main-discription">
        Первый автономный круглосуточный тренажерный зал в Минске.
        </p>
      </div>
   
    </div>
    <div class = "order-cards">
        <div class="title">
            <p>Запись</p>
          </div>
          
          <div class = "conteiner">
          <?php while( $row = mysqli_fetch_assoc($query)): ?>   
            
            <form class = "full-order-card" action="./register.php" method="post" >
         
              <div class = "order-card-data"><?php echo $row['data']?></div>
            <div class ="order-card">
           
                <div class = "order-card-conteiner">
               <input value = " <?php echo $row['id']?>" type = "hidden" name = "idO"/>
               
                
                    <div class = "order-card-name"><?php echo $row['name']?></div>
                    <p class ="order-card-conteiner-time"><?php echo $row['time']?></p>
                </div>    
                <div class = "order-card-dis"><?php echo $row['dis']?></div>

                <div class = "order-card-conteiner">

                    <p class = "order-card-conteiner-place"><?php echo $row['places']?> мест осталось</p>
                    <p class = "order-card-conteiner-trener"><?php echo $row['trener']?></p>
                </div>
            <button class = "main-button">Записаться</button>
                
            </div>

          </form>
          

          <?php endwhile; ?>
    

          </div>
    </div>

    <div class = "text-description">
      <p>        Наша цель – сделать спорт доступным для каждого. Низкие цены – результат правильных управленческих решений и отсутствия ненужных дополнительных услуг, а не экономии на посетителях: тренажеры в зале профессионального уровня и отличного качества (Life Fitness, Technogym, Hummer Strength).

Наша философия – самодостаточность и прозрачность. Чтобы купить абонемент, не надо приходить в зал – он приобретается через интернет, а в личном кабинете можно отслеживать оставшееся время, замораживать абонемент и продлевать его: управление полностью в твоих руках.

Наш подход к фитнесу – плод использования многолетнего опыта фитнес-клубов Европы, приспособленного к белорусским реалиям. Мы предлагаем больше, чем просто фитнес-клуб – мы предлагаем передовой тренажерный зал с биометрической системой контроля и свободой посещения.
</p>
    </div>
    
    <div class="servesis-cards">
      <div class="title">
        <p>Услуги</p>
      </div>
      <div class="conteiner">
        <div class="main-serves-block-card">
          <img src="/img/serv1.png" />
          <p class="main-trener-block-card-title">1 МЕСЯЦ 24/7</p>
          <p class="main-trener-block-card-dis">
          ПОСЕЩЕНИЕ С 8:00 ДО 14:00
АБОНЕМЕНТ В GYM24 НЕМИГА
          </p>
        </div>
        <div class="main-serves-block-card">
          <img src="/img/serv1.png" />
          <p class="main-trener-block-card-title">АБОНЕМЕНТ FREE TIME</p>
          <p class="main-trener-block-card-dis">
          ВРЕМЯ ВХОДА С 14:00 ДО 16:00
БЕЗ ПРИОСТАНОВКИ АБОНЕМЕНТА
АБОНЕМЕНТ В GYM24 НЕМИГА
          </p>
        </div>
        <div class="main-serves-block-card">
          <img src="/img/serv1.png" />
          <p class="main-trener-block-card-title">АБОНЕМЕНТ ЛЕГКИЙ СТАРТ</p>
          <p class="main-trener-block-card-dis">
          ПОСЕЩЕНИЕ БЕЗ ОГРАНИЧЕНИЙ 24/7
СОПРОВОЖДЕНИЕ ТРЕНЕРА
ДОСТУП К ПРИЛОЖЕНИЮ VTRAINER
АБОНЕМЕНТ В GYM24 НЕМИГА
          </p>
        </div>

      </div>
    </div>
  </div>
  <div class = "footer">
    <div class="title white">
    <p>КЛУБ НОВОГО ПОКОЛЕНИЯ</p>
    </div>
    <div class = "contact">
      <p>+375336671952</p>
      <p>voravkoliza4@gmail.com</p>

    </div>
  </div>

    </body>