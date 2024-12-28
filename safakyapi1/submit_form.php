<?php
    $sunucu = "localhost";
    $kullanici_adi = "root";
    $sifre = "";
    $veri_tabani = "safakyapi1db";

    $baglanti = new mysqli( $sunucu, $kullanici_adi, $sifre,$veri_tabani,3306);
    if ($baglanti->connect_error) 
        die("Bağlantı sağlanamadı : ".$baglanti->connect_error);
    else 
        echo ".";
    






?>