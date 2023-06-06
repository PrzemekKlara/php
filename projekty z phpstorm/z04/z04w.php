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

    if ($a == 0 || $b == 0) {
        echo "Nie można dzielić przez zero.";
    } else {
        $iloraz = $a / $b;
        $iloraz2 = round($iloraz, 2);
        echo "Iloraz liczb $a i $b = <strong>$iloraz2</strong>";
    }
    ?>
</section>
</body>
</html>
