<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Список</title>
</head>
<body>
<?php
$ids=($_GET[id]);
include_once ('connect.php');
$dbc = mysqli_connect($db_host, $db_usr, $db_pass, $db_name) or die ('Error connecting to MySQL server.');
   $qwerq = "SELECT * FROM user WHERE id = $ids";	
    $tyq = mysqli_query($dbc, $qwerq);
	$strokaq  = mysqli_fetch_array($tyq);
   printf ("<h1> $strokaq[1]</h1>");
   printf ("<h3>проживающий по адресу:</h2>");
   printf ("<h2> $strokaq[2]</h2>");
 mysqli_close($dbc);
include_once ('connect.php');
$dbc = mysqli_connect($db_host, $db_usr, $db_pass, $db_name) or die ('Error connecting to MySQL server.');
    $query = "SELECT * FROM booking WHERE mens = $ids";	
    $result = mysqli_query($dbc, $query);
?>
	 	 <form name="form1" method="post" action="delete_comp.php">
   <table width="100%" border="1">
     <tr>
       <td><strong>книга</strong></td>
       <td><strong>Цена</strong></td>
     </tr>
      <?php  while ($row = mysqli_fetch_array($result)) { ?>
     <tr>
       <td width="27%" height="29">
	   <?php

$qwer = "SELECT * FROM components WHERE id = $row[det]";	
    $ty = mysqli_query($dbc, $qwer);
	$stroka=mysqli_fetch_array($ty);
   printf ("$stroka[1]");
	   ?></td>
       <td width="73%"><?php
$qwer = "SELECT * FROM components WHERE id = $row[det]";	
    $ty = mysqli_query($dbc, $qwer);
	$stroka=mysqli_fetch_array($ty);
   printf ("$stroka[2]");
   ?></td>
       <td width="73%"><a href="delete_zakaz.php?id=<?php echo $row['id']; ?>">Удалить</a></td>
     </tr>
     <?php }?>
   </table>
</form>
  <a href="add_zakaz.php?id=<?php echo $strokaq[0]; ?>">Добавить заказ</a>
   <p><a href="index.php">На главную</a></p>
</html>
