<!DOCTYPE html>
<html>
    
<head>
    <title>Girilen Bilgiler</title>
</head>
<body>
    <h1>Girilen Bilgiler</h1>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $gender = $_POST["cinsiyet"];
        $favorite = $_POST["aktivite"];
        $message = $_POST["Mesaj"];
        
        echo "<p>Kullanıcı Adı: " . $name . "</p>";
        echo "<p>Soyisim: " . $lastname . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Cinsiyet: " . $gender . "</p>";
        if($favorite !=""){ //boş değilse yazdıracak boşsa yazmayacak
        echo "<p>Aktivite: " . $favorite . "</p>";
        }
        if($message !=""){ //boş değilse yazdıracak boşsa yazmayacak
            echo "<p>Mesajınız: " . $message . "</p>";
        }
        
    }
        
    ?>
</body>
</html>