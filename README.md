# 🔥 Fire

### Kurulum

1. Composer bilgisayarınızda kurulu olması lazımdır.
2. Terminal'e `composer require omerfarukbicer0446/fire` yazın.
3. Kurulum bitti :) 

## Örnek Kullanım
```php
require_once "./vendor/autoload.php";
use Fire\Fire;

$fire = new Fire;

echo 'Şifrelenmiş yazı:<br>';
echo $fire->encode("Hello World!");
echo '<br>';
echo '<br>Şifrelenmemiş yazı:<br>';
echo $fire->decode('55c5ac2LsmLsm88c--5Eg8088cippLsmdimİİ',true);

/* 
    Kullanımı: 

    Şifreleme :)

    fire_encode("Hello World!"); Çıktısı: 55c5ac2LsmLsm88c--5Eg8088cippLsmdimİİ

    Şifreyi çözme :)
    Not: htmlspecialchars kullanmanızı öneririm bazı özel karakterler yüzünden htmlde gözükmeme gibi durumlar oluyor.
    onu daha kolay yoldan kullanmak isterseniz fire_decode($hash,true); yazmanız yeterlidir.

    fire_decode('55c5ac2LsmLsm88c--5Eg8088cippLsmdimİİ'); Çıktısı Hello World!

*/
```

## 🌐 Telif Hakkı ve Lisans

* *Copyright (C) 2021 by* [omerfarukbicer0446](https://github.com/omerfarukbicer0446) ❤️️
* [MIT LICENSE](https://github.com/omerfarukbicer0446/fire/blob/master/LICENSE) *Koşullarına göre lisanslanmıştır..*

## ♻️ İletişim

*Benimle iletişime geçmek isterseniz, **Telegram**'dan mesaj göndermekten çekinmeyin;* [@omerfarukbicer](https://t.me/omerfarukbicer)

##

> **[www.cibza.com](https://www.cibza.com)** *için yazılmıştır..*
