<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 6</title>
</head>
<body>
<header>
    <h1> Zadanie 6</h1>
    <h2>Autor: Przemek Klara</h2><hr>
</header>
<section class="wynik">
    <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $polobwod = ($a + $b + $c) / 2;

    $pole = sqrt($polobwod * ($polobwod - $a) * ($polobwod - $b) * ($polobwod - $c));

    echo "Długość boku a: $a<br>";
    echo "Długość boku b: $b<br>";
    echo "Długość boku c: $c<br>";
    echo "Pole trójkąta: $pole";
    ?>
</section>
</body>
</html>

