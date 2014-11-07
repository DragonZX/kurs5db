<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Список</title>
</head>

<?php
$klient=($_GET[id]);
printf ("<h1> $ids</h1>");
?>
<body>
<?php $ids=($_GET[id]);
include_once ('connect.php');
$dbc = mysqli_connect($db_host, $db_usr, $db_pass, $db_name) or die ('Error connecting to MySQL server.');
  $qwer = "SELECT * FROM user WHERE id = $ids";	
    $ty = mysqli_query($dbc, $qwer);
	$stroka  = mysqli_fetch_array($ty);
	printf ("<h1>Добавить заказ для</h1>");
   printf ("<h1> $stroka[1]</h1>");
   printf ("<h3>проживающий по адресу:</h2>");
   printf ("<h2> $stroka[2]</h2>");
    $query = "SELECT * FROM components";
    $result = mysqli_query($dbc, $query)or die('Error querying database.');
?>
	 <form name="form1" method="post" action="delete_comp.php">
   <table width="100%" border="1">
     <tr>
       <td><strong>книга</strong></td>
       <td><strong>Цена</strong></td>
     </tr>
      <?php  while ($row = mysqli_fetch_assoc($result)) { ?>
     <tr>
  	   <td width="73%"><a href=
	   "addd_zakaz.php?id=<?php echo $klient;?>&detal=<?php echo $row['id']; ?>">
	   <?php echo $row['detals']?>; </a></td>
       <td width="73%"><?php echo $row['cost']; ?></td>
     </tr>
     <?php }?>
   </table>
   </form>
   <p><a href="index.php">На главную</a></p>
  </body>