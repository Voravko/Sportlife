<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="/styles/style11.css" />
    <link rel="stylesheet" href="/styles/order.css" />
  </head>
  <body>
    <div class="lending-order">
      <header class="main-header">
        <div class="main-header-block"></div>
        <a href="../index.php">
          <div class="main-logo">
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
          echo '<a href = "templates/reg.html"><li class="menu-el">Регистрация</li></a>';
          echo '<a href = "templates/log.html"><li class="menu-el">Вход</li></a>';
          }
          else{
          echo '<a href = "templates/profile.php"><li class="menu-el">Профиль</li></a>';

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

    <div class="text-description">
      <p>
      Более 90 профессиональных тренажеров (новейшие «Life fitness, Hammer strength, Technogym»)
Фитнес клуб в Минске открыт круглосуточно
Биометрическая система обслуживания по отпечатку пальца
Бесплатная фильтрованная, кипяченая и охлажденная питьевая вода
Без ограничения посещений и времени
Продажа абонементов через интернет или терминалы, которые установлены в фитнес центре
Рядом бесплатный паркинг
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
    <div class="footer">
      <div class="title white">
      <p>КЛУБ НОВОГО ПОКОЛЕНИЯ</p>
      </div>
      <div class="contact">
        <p>+375336671952</p>
        <p>voravkoliza4@gmail.com</p>
      </div>
    </div>
  </body>
</html>
