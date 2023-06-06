<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zadanie 8</title>
</head>
<body>
<header>
    <h1>Zadanie 8</h1>
    <h2>Autor: Przemek Klara</h2>
    <hr>
</header>
<section class="wynik">
    <?php

    $seconds = $_POST['seconds'];

    function przeliczCzas($seconds) {
        $hours = floor($seconds/3600);
        $minutes = floor(($seconds%3600)/60);
        $seconds = $seconds%60;

        return $hours . 'g ' . $minutes . 'm ' . $seconds . 's ' ;
    }

    $wynik = przeliczCzas($seconds);
    $seconds = $seconds . "s";
    echo "<p>Wynik  = <strong> $wynik</strong><p/>"

    ?>
</section>
</body>
</html>
