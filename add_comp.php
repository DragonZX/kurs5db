﻿<head>
<META NAME="refresh" CONTENT="4">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Добавим новую книгу!</title>
</head>
<body>

<?php
include_once ('connect.php');
$dbc = mysqli_connect($db_host, $db_usr, $db_pass, $db_name) or die ('Error connecting to MySQL server.');
  $detals = $_POST['detals'];
  $cost = $_POST['cost'];
  $query = "INSERT INTO components (detals, cost)  VALUES ('$detals', '$cost')";
  $result = mysqli_query($dbc, $query) or die('Error querying database.');
  echo 'Книга добавлена';
  mysqli_close($dbc);
?>
<p><a href="index.php">На главную</a></p>
</body>
</html>