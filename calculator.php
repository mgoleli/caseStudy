<?php

//1. Plain PHP ile Hesap Makinesi

function calculate($firstNumber, $secondNumber, $process)
{
    if (!is_numeric($firstNumber) || !is_numeric($secondNumber)) {
        return "Lütfen sayısal değerler girin!";
    }

    switch ($process) {
        case "+":
            return $firstNumber + $secondNumber;
        case "-":
            return $firstNumber - $secondNumber;
        case "*":
            return $firstNumber * $secondNumber;
        case "/":
            if ($secondNumber == 0) {
                return "Sıfıra bölünme hatası!";
            }
            return $firstNumber / $secondNumber;
        default:
            return "Hatalı işlem";
    }
}

if (isset($_POST['firstNumber']) && isset($_POST['secondNumber']) && isset($_POST['process'])) {
    $firstNumber    = htmlspecialchars($_POST['firstNumber'], ENT_QUOTES, 'UTF-8');
    $secondNumber   = htmlspecialchars($_POST['secondNumber'], ENT_QUOTES, 'UTF-8');
    $process        = $_POST['process'];

    $result         = calculate($firstNumber, $secondNumber, $process);
    echo $result;
    exit;
}
?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <style>
        body {
            font-family: sans-serif;
        }

        .container {
            width: 500px;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        form {
            margin-top: 20px;
        }

        input {
            width: 100px;
            height: 30px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        select {
            width: 100px;
            height: 30px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Hesap Makinesi</h1>
        <form id="calculatorForm" action="index.php" method="post">
            <input type="text" name="firstNumber" placeholder="Birinci Sayı">
            <input type="text" name="secondNumber" placeholder="İkinci Sayı">
            <select name="process">
                <option value="+">Topla</option>
                <option value="-">Çıkar</option>
                <option value="*">Çarp</option>
                <option value="/">Böl</option>
            </select>
            <input type="submit" value="Hesapla">
        </form>
        <div class="result"></div>
    </div>

    <script>
        document.getElementById('calculatorForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var form = event.target;
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'calculator.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.querySelector('.result').innerText = "Sonuç: " + xhr.responseText;
                }
            };
            xhr.send(formData);
        });
    </script>
</body>

</html>