<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>�������� ������������</title>
</head>
<body>

<?php
  $dbc = mysqli_connect('localhost', 'libs', '12345', 'libs')
    or die('Error connecting to MySQL server.');

  $fio = $_POST['fio'];
  $adres = $_POST['adres'];

  $query = "INSERT INTO user (fio, adres)  VALUES ('$fio', '$adres')";
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');

  echo '������������ ��������';
  mysqli_close($dbc);
?>
<p><a href="index.php">�� �������</a></p>
</body>
</html>