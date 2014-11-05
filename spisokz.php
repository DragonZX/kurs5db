<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Список</title>
</head>

<body>
<?php
$dbc = mysqli_connect('localhost', 'libs', '12345', 'libs')
      or die('Error connecting to MySQL server.');

    $query = "SELECT * FROM booking";
    $result = mysqli_query($dbc, $query)
      or die('Error querying database.');

?>
	 <form name="form1" method="post" action="delete_room.php">
   <table width="100%" border="1">
     <tr>
       <td><strong>ФИО</strong></td>
       <td><strong>Заказ</strong></td>
     </tr>
      <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
     <tr>
       <td width="27%" height="29">
	   <?php
//соотношение номера и имени в таблицу user
$qwer = "SELECT * FROM user WHERE id = $row[mens]";	
    $ty = mysqli_query($dbc, $qwer);
	$stroka=mysqli_fetch_array($ty);
   printf ("<a href='zakaz.php?id=$row[mens]'>$stroka[1]</a>");
	   
	   ?></td>
	   
       <td width="73%">
	   <?php
	   $qwer = "SELECT * FROM components WHERE id = $row[det]";	
    $ty = mysqli_query($dbc, $qwer);
	$stroka=mysqli_fetch_array($ty);
   printf ("$stroka[1]");
	   //соотношение номера и имени в таблицу components
	   
	   ?>
	   </td>
       <td width="73%"><a href="delete_room.php?id=<?php echo $row['id']; ?>">Удалить</a></td>
     </tr>
     <?php }?>
   </table>
   </form>
   
   
   <p><a href="index.php">На главную</a></p>
   
 
  </body>
</html>