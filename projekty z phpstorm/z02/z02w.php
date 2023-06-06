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

<section class="wynik">
<?php

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$srednia = ($a +$b +$c +$d)/4;
$srednia2 = round($srednia,1);
echo "a:$a <br> b:$b <br> c:$c <br> d:$d <br> <strong>Średnia: $srednia <br> 
Średnia zaokrąglona: $srednia2  </strong> ";


?>
    </section>
</body>
</html>
