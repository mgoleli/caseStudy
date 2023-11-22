<!DOCTYPE html>
<html>
<head>
    <title>4. XSS Açığı Düzenlenmiş Örnek</title>
</head>
<body>
    <?php

    $userName = $_GET['userName'];

    if (!ctype_alnum($userName)) {
      echo '<p>Kullanıcı adı sadece alfanumerik karakterlerden oluşabilir.</p>';
      exit;
    }

    if (strlen($userName) > 20) {
      echo '<p>Kullanıcı adı en fazla 20 karakter olabilir.</p>';
      exit;
    }
    
    echo '<h1>Kullanıcı Adı:</h1>';
    echo '<p>' . htmlspecialchars($userName, ENT_QUOTES, 'UTF-8') . '</p>';
    
    ?>
</body>
</html>
