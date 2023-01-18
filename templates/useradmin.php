<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style1.css" />
  <link href="/styles/verif1.css" rel="stylesheet" />
  <link href="/styles/isid1.css" rel="stylesheet" />
  <link rel="stylesheet" href="/styles/order11.css" />
 


  <title>Document</title>
</head>

<body class="main-theme-black">
<?php 
    $link = mysqli_connect("localhost", "root", "", "gym",3306);
    mysqli_set_charset($link, "utf8");
    $row = [];
    session_start();
    $query = mysqli_query($link, "SELECT `login`, `email`, `pass`, `name`, `surname`, `weight`, `height`, `goal` FROM `users`");

    

    ?>
  <div class="header">
    <div class="main-header-block">
      <i><img src="../img/logoWhite.svg" /></i>
    </div>
    <p class="reg">Админпанель</p>
    <form action="../functions/exit.php" method="get">
      <button class =  "main-func-button1">Выйти</button>
    </form>
  </div>
  <div class="admn-cont">
  <a href = "./adminpanel.php"> <h2 >Занятие</h2> </a>
    <a href = "./useradmin.php"><h2 class = "active_ad">Пользователи</h2></a>
    <a href = "./treneradm.php"> <h2 > Тренера</h2></a>

  </div>
  
 <div class="admn-cont">


  <table class="table">
  <form action="../functions/delclas.php" method="post">

	<thead>
		<tr>
			<th>Логин</th>
			<th>Почта</th>
			<th>Пароль</th>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Вес</th>
			<th>Рост</th>
			<th>Цель</th>
		</tr>
	</thead>
	<tbody>
		<tr>
   
  <?php while( $row = mysqli_fetch_assoc($query)): ?>  


			<td><?php echo $row['login']?></td>
			<td><?php echo $row['email']?></td>
			<td><?php echo $row['pass']?></td>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['surname']?></td>
			<td><?php echo $row['weight']?></td>
			<td><?php echo $row['height']?></td>
			<td><?php echo $row['goal']?></td>
		</tr>
	<?php endwhile; ?>
	</tbody>
  </form>
</table>

 </div>

 


</body>
</html>
