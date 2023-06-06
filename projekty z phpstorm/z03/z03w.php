<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 2</title>
</head>
<body>
<header>
    <h1> Zadanie 2</h1>
    <h2>Autor: Przemek Klara</h2><hr>
</header>
<section class="wynik">
    <?php

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $srednia = $a * $b * $c * $d;
    $srednia2 = pow($srednia, 1/4);
    echo "a: $a <br> b: $b <br> c: $c <br> d: $d <br> <strong>Średnia geometryczna:
 $srednia <br> Średnia geometryczna zaokrąglona: $srednia2</strong>";


    ?>
</section>
</body>
</html>
