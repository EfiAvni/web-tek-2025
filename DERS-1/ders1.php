<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //phpinfo(); //bu fonksiyon yüklü olan php versiyonunu ve kurulu paketlerin bilgisini yazdırır.
    
    echo "Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı<br>";
    
    //php içerisinde html etiketleri kullanılabilir.
    echo "<br>Aydın Adnan Menderes Üniversitesi Aydın MYO Bilgisayar Programcılığı<br>";
    
    //değişken $ işareti ile tanımlanır.
    $metin = "<br>Aydın Adnan Menderes Üniversitesi <br> Aydın MYO Bilgisayar Programcılığı<br>";
    echo $metin;

    //Değişken içerisindeki metinsel ifadenin büyük küçük harf dönüşümleri.
    echo $bharf = strtoupper($metin);
    echo $kharf = strtolower($bharf);

    echo $bharf2 = mb_strtoupper($metin);
    echo $kharf2 = mb_strtolower($bharf2);
    

    ?>

</body>
</html>