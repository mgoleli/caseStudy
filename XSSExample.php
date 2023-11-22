<!DOCTYPE html>
<html>
<head>
    <title>3. XSS Açığı Örnek</title>
</head>
<body>
    <?php

    $userName = $_GET['userName'];

    echo '<h1>Kullanıcı Adı:</h1>';
    echo '<p>' . $userName . '</p>';
    
    ?>
</body>
</html>
