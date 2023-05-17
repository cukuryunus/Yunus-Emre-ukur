<?php
// Kullanıcı adı ve şifre kontrolü
$dogruKullaniciAdi = 'B221210018@gmail.com';
$dogruSifre = 'B221210018';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $kullaniciAdi = $_POST['username'];
  $sifre = $_POST['password'];

  if ($kullaniciAdi === $dogruKullaniciAdi && $sifre === $dogruSifre) {
    // Giriş başarılı, hoş geldiniz mesajıyla karşılama sayfasına yönlendir
    header("Location: karsilama.php?kullanici=$kullaniciAdi");
    exit();
  } else {
    // Giriş bilgileri hatalı, login sayfasına geri yönlendir
    echo '<h1>Hatalı Giriş Geri yönlendiriliyorsunuz.. !</h1>';
    header("refresh:2;url=login.html");
    exit();
  }
}
?>