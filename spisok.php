<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Список</title>
</head>

<body>
<?php
include_once ('connect.php');
$dbc = mysqli_connect($db_host, $db_usr, $db_pass, $db_name) or die ('Error connecting to MySQL server.');

    $query = "SELECT * FROM user";
    $result = mysqli_query($dbc, $query)
      or die('Error querying database.');

?>
	 <form name="form1" method="post" action="zakaz.php">
   <table width="100%" border="1">
     <tr>
       <td><strong>ФИО</strong></td>
       <td><strong>Адрес</strong></td>
	   
     </tr>
     
	      <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
     <tr>
       <td width="27%"><a href="zakaz.php?id=<?php echo $row['id']; ?>"><?php echo $row['fio']; ?></a></td>
       <td width="73%"><?php echo $row['adres']; ?></td>
       <td width="73%"><a href="delete_user.php?id=<?php echo $row['id']; ?>">Удалить</a></td>
     </tr>
     <?php } ?>
   </table>
   </form>
   
   
   <p><a href="index.php">На главную</a></p>
   
 <p>Добавить нового человека</p>
  <form name="form" method="post" action="add_user.php">
    <label for="fio">ФИО</label>
    <input type="text" id="fio" name="fio" size=100 /><br />
	<label for="fio">Адрес</label>
    <input type="text" id="adres" name="adres" size=100 /><br />
    <input type="submit" name="Submit" value="добавить!" />
  </form>
  </body>
</html>