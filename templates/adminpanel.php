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
    $query = mysqli_query($link, "SELECT `id`,`data`, `name`, `time`, `places`, `trener`, `dis` FROM `clasess`");
    $query1 = mysqli_query($link, "SELECT `name`FROM `trener`");

    

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
    <h2 class = "active_ad">Занятие</h2>
    <a href = "./useradmin.php"><h2 >Пользователи</h2></a>
    <a href = "./treneradm.php"> <h2>Тренера</h2></a>
  </div>
  <div class="admn-cont">
 <form class="container-portfolio" action="../functions/addord.php" method="post">
    
    <div class="input-container">
      <input type="text" name="name1" required="" />
      <label>Дата</label>
   
    </div>
    <div class="input-container">
      <input type="text" name="surn" required="" />
      <label>Название</label>
    </div>
    <div class="input-container">
      <input type="text" name="wei" required="" />
      <label>Время</label>

    </div>
    <div class="input-container">
      <input type="text" name="hei" required="" />
      <label>Места</label>
     
    </div>
    <div class="input-container">
   

    <select name="goal" >
  <?php while( $row1 = mysqli_fetch_assoc($query1)): ?>  


<option value="<?php echo $row1['name']?>"><?php echo $row1['name']?></option>

<?php endwhile; ?>

</select>
      
      
    </div>
    <div class="input-container">
      <input type="text" name="abon"  required="" />
      <label>Описание</label>
  
    </div>
    <button class =  "main-func-button">Сохранить</button>
</form>
 </div>
  
 <div class="admn-cont">


  <table class="table">
  <form action="../functions/delclas.php" method="post">

	<thead>
		<tr>
			<th>Дата</th>
			<th>Название</th>
			<th>Время</th>
			<th>Места</th>
			<th>Тренер</th>
			<th>Описание</th>
			<th></th>

		</tr>
	</thead>
	<tbody>
		<tr>
   
  <?php while( $row = mysqli_fetch_assoc($query)): ?>  


			<td><?php echo $row['data']?>
      <input value="<?php echo $row['id'] ?>" type = "hidden" name = "idC"/>
    </td>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['time']?></td>
			<td><?php echo $row['places']?></td>
			<td><?php echo $row['trener']?></td>
			<td><?php echo $row['dis']?></td>
			<td><button class = "main-button-del">Удалить</button></td>



		</tr>
	<?php endwhile; ?>
	</tbody>
  </form>
</table>

 </div>

 


</body>
</html>
