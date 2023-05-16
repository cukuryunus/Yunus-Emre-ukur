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
        $gender = $_POST["gender"];
        
        echo "<p>Kullanıcı Adı: " . $name . "</p>";
        echo "<p>Parola: " . $lastname . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Cinsiyet: " . $gender . "</p>";
    }
        
    ?>
</body>
</html>