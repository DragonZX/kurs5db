<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Список</title>
</head>

<body>
<?php
$dbc = mysqli_connect('localhost', 'libs', '12345', 'libs')
      or die('Error connecting to MySQL server.');

    $query = "SELECT * FROM components";
    $result = mysqli_query($dbc, $query)
      or die('Error querying database.');

?>
	 <form name="form1" method="post" action="delete_comp.php">
   <table width="100%" border="1">
     <tr>
       <td><strong>книгу</strong></td>
       <td><strong>Цена</strong></td>
     </tr>
      <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
     <tr>
       <td width="27%" height="29"><?php echo $row['detals']; ?></td>
       <td width="73%"><?php echo $row['cost']; ?></td>
       <td width="73%"><a href="delete_comp.php?id=<?php echo $row['id']; ?>">Удалить</a></td>
     </tr>
     <?php }?>
   </table>
   </form>
   <p><a href="index.php">На главную</a></p>
  </body>
</html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Добавим новую книгу!</title>
 </head>
<body>
   <p>Добавить книгу</p>
  <form method="post" action="add_comp.php">
    <label for="detals">Название книги</label>
    <input type="text" id="detals" name="detals" size=100 /><br />
	<label for="cost">Цена книги</label>
    <input type="text" id="cost" name="cost" size=100 /><br />
    <input type="submit" name="Submit" value="Добавить!" />
  </form>
  
  <p><a href="index.php">На главную</a></p>
</body>
</html>