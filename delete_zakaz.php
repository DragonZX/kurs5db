<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>������� ������������</title>
</head>
<body>

<?php
include_once ('connect.php');
$dbc = mysqli_connect($db_host, $db_usr, $db_pass, $db_name) or die ('Error connecting to MySQL server.');

 
    $query = "DELETE FROM `booking` WHERE id=$_GET[id]";
	
  $result = mysqli_query($dbc, $query)
    or die('Error querying database.');



  echo '����� ������';
  mysqli_close($dbc);
?>
<p><a href="index.php">�� �������</a></p>

</body>
</html>