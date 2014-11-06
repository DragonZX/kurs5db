<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Добавили пользователя</title>
</head>
<body>

<?php
include_once ('connect.php');
$dbc = mysqli_connect($db_host, $db_usr, $db_pass, $db_name) or die ('Error connecting to MySQL server.');

  $fio = $_GET["id"];
  $adres = $_GET["detal"];

  $query = "INSERT INTO booking (mens, det)  VALUES ('$fio', '$adres')"
    or die('Error querying database.');
   $result = mysqli_query($dbc, $query);

  echo 'Заказ добавлен';
 mysqli_close($dbc);
?>
<p><a href="index.php">На главную</a></p>
<p><a href="zakaz.php?id=<?php echo $fio;?>">просмотреть список</a></p>
</body>
</html>