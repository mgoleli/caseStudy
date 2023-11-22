<?php

//2. Hesap Makinesini Kullanan Bot

include 'index.php';

$calculations = [];

for ($i = 0; $i < 1000; $i++) {
    $firstNumber = rand(1, 100); 
    $secondNumber = rand(1, 100); 

    $operators = ['+', '-', '*', '/'];
    $operator = $operators[array_rand($operators)]; 

    $startTime = microtime(true);

    //Sıfıra bölünmeyi kontrol et
    if ($operator == '/' && $secondNumber == 0) {
        $result = 'Sıfıra bölme hatası';
    } else {
        $result = calculate($firstNumber, $secondNumber, $operator);
    }

    // Hesaplama süresini hesapla
    $endTime = microtime(true);
    $executionTime = $endTime - $startTime;

    $calculation = [
        'operation' => "$firstNumber $operator $secondNumber",
        'result' => $result,
        'execution_time' => $executionTime
    ];

    $calculations[] = $calculation;
}

// JSON dosyasına kaydet
$file = 'calculations.json';
file_put_contents($file, json_encode($calculations, JSON_PRETTY_PRINT));

echo 'İşlemler tamamlandı ve JSON dosyası oluşturuldu: ' . $file;
?>
