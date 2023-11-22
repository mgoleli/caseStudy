# Hesap Makinesi Uygulaması

Bu proje, Plain PHP ile oluşturulan bir hesap makinesi uygulamasını içermektedir. Uygulama, hesaplamaları gerçekleştirmek için JavaScript'te XHR (XMLHttpRequest) kullanmaktadır. Proje geliştirilirken güvenlik odaklı önlemler alınmıştır.

## Dosya Açıklamaları

- **calculator.php:** Hesap makinesinin ön yüzü olan sayfa.
- **calculatorBot.php:** `calculator.php` sayfasındaki fonksiyon kullanılarak 1000 adet rastgele işlem oluşturulup JSON dosyasına (calculations.json) kaydedildi.
- **XSSExample.php:** GET yöntemiyle URL üzerinden XSS açığı oluşturabilecek basit bir arayüz.
- **XSSExampleFixed.php:** `XSSExample.php` sayfasında XSS açığına alınabilecek önlemler eklenmiş hal.

## Güvenlik

Bu proje geliştirilirken güvenlik zaafiyetlerine karşı önlemler alınmıştır. Özellikle XSS (Cross-Site Scripting) açıklarına karşı `XSSExampleFixed.php` sayfasında gerekli önlemler uygulanmıştır.


## Kurulum

Projenin çalıştırılması için herhangi özel bir kurulum gerektirmez. Dosyalar doğrudan bir web sunucusuna yüklenebilir ve tarayıcı üzerinden erişilebilir.
