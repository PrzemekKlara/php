<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 7</title>
</head>
<body>
<header>
    <h1>Zadanie 7</h1>
    <h2>Autor: Przemek Klara</h2>
    <hr>
</header>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $fahrenheity=($a*9/5)+32;
    $kelwiny=$a+273.15;


    echo " <h4>T<sub><i>Celsiusz</i></sub> = $a</h4>";
    echo "<h4>T<sub><i>Kelvin</i></sub> = $kelwiny</h4> ";
    echo "<h4>T<sub><i>Fahrenheit</i></sub> = $fahrenheity</h4>";

    ?>
</section>
</body>
</html>
