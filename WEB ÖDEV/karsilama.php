<!DOCTYPE html>
<html>
<head>
  <title>Karşılama Sayfası</title>
</head>
<body>
  <?php
  $kullanici = $_GET['kullanici'];
  echo '<h1>Hoş geldiniz, ' . $kullanici . ' Yönlendiriliyorsunuz.. !</h1>';
  
  header("refresh:4;url=index.html");
  ?>
</body>
</html>