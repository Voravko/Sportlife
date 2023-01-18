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
    $query = mysqli_query($link, "SELECT `id`,`name`, `surname`, `age`, `aduc` FROM `trener`");

    

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
    <a href = "./useradmin.php"><h2 >Пользователи</h2></a>
    <a href = "./treneradm.php"> <h2 class = "active_ad"> Тренера</h2></a>

  </div>
  <div class="admn-cont">
 <form class="container-portfolio" action="../functions/addtren.php" method="post">
    
    <div class="input-container">
      <input type="text" name="name1" required="" />
      <label>Имя</label>
   
    </div>
    <div class="input-container">
      <input type="text" name="surn" required="" />
      <label>Фамилия</label>
    </div>
    <div class="input-container">
      <input type="text" name="wei" required="" />
      <label>Возвраст</label>

    </div>
    <div class="input-container">
      <input type="text" name="hei" required="" />
      <label>Образование</label>
     
    </div>
   
    <button class = "main-func-button">Сохранить</button>
</form>
 </div>
  
 <div class="admn-cont">


  <table class="table">
  <form action="../functions/deltern.php" method="post">

	<thead>
		<tr>
			<th>Имя</th>
			<th>Фамилия</th>
			<th>Возвраст</th>
			<th>Образование</th>
			<th></th>

		</tr>
	</thead>
	<tbody>
		<tr>
   
  <?php while( $row = mysqli_fetch_assoc($query)): ?>  


			<td><?php echo $row['name']?>
      <input value="<?php echo $row['id'] ?>" type = "hidden"  name = "idC"/>
        
        </td>
			<td><?php echo $row['surname']?></td>
			<td><?php echo $row['age']?></td>
			<td><?php echo $row['aduc']?></td>
			<td><button class = "main-button-del">Удалить</button></td>



		</tr>
	<?php endwhile; ?>
	</tbody>
  </form>
</table>

 </div>

 


</body>
</html>
