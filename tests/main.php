<?php
/*
    Author: Ömer Faruk Biçer
    Website: https://www.cibza.com
    Sevgiler saygılar şifreleme algoritması emrinizde :).
*/
use Fire\Fire;
require_once "../src/Fire.php";

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
?>