<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Document</title>
    <link rel="stylesheet" href="styles/style11.css" />
  </head>
  <body>
    <div class="lending-main">
      <header class="main-header">
        <div class="main-header-block"></div>
        <div class="main-logo">
          <img src="../img/logo.svg" />
        </div>
        <ul class="main-menu">
          <a href = "templates/serv.php"><li class="menu-el">Услуги</li></a>
          <a href = "templates/order.php"><li class="menu-el">Занятия</li></a>
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
    <div class="discription-block">
      <div class="discription-block-about">
        <div class="discription-block-img">
          <img src="../img/text.svg" />
        </div>
        <p class="discription-block-p">
        Наша философия – полная самостоятельность и независимость клиента. Покупка абонемента не потребует даже посещения зала – он приобретается через интернет, а в личном кабинете можно отслеживать оставшееся время и продлевать его.

        </p>
      </div>
      <div class="discription-block-table">
        <div class="discription-block-table-card">
          <p class="discription-block-table-name">_</p>
          <p class="discription-block-table-number">234</p>
          <p class="discription-block-table-dis"> клиентов</p>
        </div>
        <div class="discription-block-table-card">
          <p class="discription-block-table-name">-</p>
          <p class="discription-block-table-number">24</p>
          <p class="discription-block-table-dis">Услуги</p>
        </div>
        <div class="discription-block-table-card">
          <p class="discription-block-table-name">_</p>
          <p class="discription-block-table-number">14</p>
          <p class="discription-block-table-dis">Тренеров</p>
        </div>
        <div class="discription-block-table-card">
          <p class="discription-block-table-name">_</p>
          <p class="discription-block-table-number">34</p>
          <p class="discription-block-table-dis">Тренажера</p>
        </div>
      </div>
    </div>

    <div class="main-paralax"></div>

    <div class="main-servesis">
      <div class="title">
        <p>Почему надо выбирать нас ?</p>
      </div>
      <p class="main-servesis-block-p">
      Невысокие цены –  результат правильных управленческих решений и отсутствия ненужных дополнительных услуг, а не экономии на посетителях – все установленное в зале оборудование профессионального уровня (Life Fitness, Technogym, Hummer Strength).
      </p>
      <div class="main-servesis-cards">
        <div class="main-serv-card">
          <p>
           
Клуб открыт 24 часа в сутки, приходи в любое время.
          </p>
        </div>
        <div class="main-serv-card">
          <p>Просторный зал для занятий спортом – 800 М2 </p>
        </div>
        <div class="main-serv-card">
          <p>
          Life Fitness, Teсhnogym, Hammer Strengh, TRX
          </p>
        </div>
        <div class="main-serv-card">
          <p>Посещения не ограничены – приходи сколько хочешь!</p>
        </div>
      </div>
    </div>
    
    <div class="main-trener-block">
      <div class="title">
        <p>Тренера</p>
      </div>

      <div class="main-trener-block-cards">
        <div class="main-trener-block-card">
          <img src="/img/women1.svg" />
          <p class="main-trener-block-card-title">Елена Михалова</p>
          <p class="main-trener-block-card-dis">
          Мастер Спорта по спортивной аэробике
          </p>
        </div>
        <div class="main-trener-block-card">
          <img src="/img/men1.svg" />
          <p class="main-trener-block-card-title">Максим Иванов</p>
          <p class="main-trener-block-card-dis">
          Достижения: МС по пауэлифтингу, чемпион РБ по бодибилдингу 

          </p>
        </div>
        <div class="main-trener-block-card">
          <img src="/img/women2.svg" />
          <p class="main-trener-block-card-title">Мария Федрова</p>
          <p class="main-trener-block-card-dis">
          Образование: ИППК БГУФК (оздоровительная физическая культура) 
          </p>
        </div>
        <div class="main-trener-block-card">
          <img src="/img/men2.svg" />
          <p class="main-trener-block-card-title">Иван Потапов</p>
          <p class="main-trener-block-card-dis">
          Педагог по культуре питания в Национальной школе красоты для подростков и детей.
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
