<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade - Float</title>
</head>
<body>
    
<?php

echo 6.14;
echo "<br>";
echo 67.67;
echo "<br>";

$c = -45.21;

echo $c;
echo "<br>";

if(is_float($c)) {
    echo "Sim, é float negativo";
}

if(is_int($c)) {
    echo "É inteiro";
}
?>

</body>
</html>