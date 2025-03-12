<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Ders-2</title>
</head>
<body>
    <!--
    Değişken Tanımlama:
    1. Değişkenler $ işareti ile tanımlanır.
    2. Mutlaka bir harf veya _işareti ile bailayabilir.
    3. Değişkenler rakamlar ile başlayamaz.
    4. Değişken içerisinde boşluk ve türkçe karakter kullanılamaz.
    5. Değişkenlerde büyük küçük harf duyarlılığı vardır.
    6. Programlama dili içerisinde bulunan özel tanımlar değişken ismi olarak kullanılamaz.

    -->

    <h4>Matematiksel İfadeler</h4>
    <h5>Toplama İşlemi</h5>
    <?php
    $sayi1 = 20;
    $sayi2 = 17;
    $sonuc = $sayi1 + $ $sayi2;
    echo $sonuc;
    echo "<br><br>İşlemin sonucu $sayi1 + $sayi2 = $sonuc<br><br>";
    
    echo "Atamalı Toplama İşlemi: <br>";
    $deger = 10;
    $ekdeger = 59;
    echo "Sonuç = $deger + $ekdeger = " .$deger += $ekdeger;
    
    echo "<br><br> Değer değişkeninin içeriği: $deger";

    echo "<br> Değer değişkeninin yeni içeriği: " .$deger+=123;

    echo "<br> Değer değişkeninin son içeriği: $deger"; 

    ?>
    <h5>Arttırma işlemi</h5>
    <?php
    $sayi1 = 50;
    echo "<br>Değişkenin Değeri:" .$sayi1;

    echo "<br>Arttırma İşlemi Yapıldı:" . ++$sayi1;

    

    ?>
</body>
</html>