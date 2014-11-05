<head>
<META NAME="refresh" CONTENT="4">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Добавим новую книгуку!</title>
</head>
<body>

<?php
  $dbc = mysqli_connect('localhost', 'libs', '12345', 'libs')
    or die('Error connecting to MySQL server.');

  $detals = $_POST['detals'];
  $cost = $_POST['cost'];

  $query = "INSERT INTO components (detals, cost)  VALUES ('$detals', '$cost')";
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');

  echo 'книга добавлена';
  mysqli_close($dbc);
?>
<p><a href="index.php">На главную</a></p>
<?php

?>
</body>
</html>