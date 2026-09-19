<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <title>escopo local de variavel</title>


<?php
//escopo local como tambem em outras linguagens de php funciona na linguagem funciona em global, estatico, e regional
$x = 10;
echo "$x global <br>";

function teste () {
    $x = 5;
    echo "$x local <br>";
}

teste();

echo "$x global <br>";
teste();

function testando() {
    $x = 12;
    echo "$x local 2 <br>";
}

$x = 99;

testando();

teste();

echo "$x global <br>";

?>
</body>
</html>