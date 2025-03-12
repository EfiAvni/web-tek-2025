<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
    <!--
    ceil: Herhangi bir ondalıklı sayıyı yukaruj yuvarlamal için kullanılır.
    floor: Herhangi bir ondalıklı sayıyı yukarı yuvarlamak için kullanılır.
    round: Herhangi bir ondalıklı sayıyı en yakına yuvarlamak için kullanılır.
    -->
    <h5>Ceil İşlemi</h5>
    <?php
    $sayi1 = 14.5;
    echo "Sonuc = " .ceil($sayi1);
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 yukarı yuvarlama işleminin sonucu " .ceil($sayi1)

    ?>

    <h5>Floor İşlemi</h5>
    <?php
    $sayi1 = 24.98563;
    echo "Sonuc = " .floor($sayi1);

    ?>

    <h5>Round İşlemi</h5>
    <?php
    $sayi1 = 57.323;
    echo "\$sayi1 değişkeninin değeri $sayi1 Round işleminin sonucu " .round($sayi1);

    $sayi1 = 57.523;
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 Round işleminin sonucu " .round($sayi1);



    echo "<hr> İlk 2 hanenin sabit tutularak 3. haneye göre raund işleminin uygulanması: ";

    $sayi1 = 57.3223;
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 Round işleminin sonucu " .round($sayi1,2);

    $sayi1 = 57.3298;
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 Round işleminin sonucu " .round($sayi1,2);



    echo "<hr><br> Vİrgülden öncesi için yuvarlama uygulaması: ";

    $sayi1 = 257.28746;
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 Round işleminin sonucu " .round($sayi1,-2);

    $sayi1 = 557.28746;
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 Round işleminin sonucu " .round($sayi1,-2);
    echo "<hr>";
    ?>

    <h5>Number Format İşlemi</h5>
    <?php
    $sayi1 = 95450.28746;
    echo "\$sayi1 değişkeninin değeri $sayi1 Round işleminin sonucu " .number_format($sayi1)." TL";
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 Round işleminin sonucu " .number_format($sayi1,2)." TL";
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 Round işleminin sonucu " .number_format($sayi1,2,",",".")." TL";
    echo "<br>\$sayi1 değişkeninin değeri $sayi1 Round işleminin sonucu " .number_format($sayi1,0,",",".")." TL";

    ?>
</body>
</html>