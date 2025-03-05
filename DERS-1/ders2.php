<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Derslerş</title>
</head>
<body>
    <h3>Sık Kullanılan hazır Fonksiyonlar</h3>

    <?php

    $metin = "<b> aydın adnan menderes üniversitesi </b>";
    $byazi = strtoupper($metin); //Yazıyı büyük harfe dönüştür.
    $kyazi = strtolower($byazi); //Yazıyı küçük harfe dönüştürür.
    $mb_byazi = mb_strtoupper($kyazi); //Yazıyı büyük harfe dönüştür.
    $mb_kyazi = mb_strtolower($mb_byazi); //Yazıyı küçük harfe dönüştür.
    $ilkharf_buyuk_metin = ucfirst($mb_kyazi); //Gelen metnin ilk harfini büyütür.
    $ilkharf_buyuk_kelime = ucwords($mb_kyazi); //Gelen metnin kelimelerininbaş harflerini büyütür.
    
    echo "Karakter Sayısı: " .strlen($metin); //metindeki karakter sayısını verir
    echo "<br> Metnin Belirli Bir Karakter Sayısı: " .substr($metin,0,10); 

    ?>

    <h4>Uygulama:</h4>
    <p>Lorem metninin ilk 100 karakterini alın devamında bir buton koyarak Adü Web sitesine yönlendirin.</p>

    <?php

    $lorem = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
    Praesentium placeat corporis accusantium qui odio, quo aspernatur laudantium temporibus vel 
    excepturi consequatur accusamus unde nobis velit ratione, eos ex iste perferendis.";

    echo "İlk 100 karakter: " .substr($lorem,0,100) . "...";
    ?>
    <a href="https://www.adu.edu.tr" target="_blank">Devamını oku</a>
</body>
</html>