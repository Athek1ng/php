

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>

<?php
/*variavel por ref 
em php, uma variavel por referencia permeite que duas ou mais variaveis apontem para o mesmo conteudo na memoria, para criar uma variavel por refencia
utilizase o caractere da variavel de origem.
*/

//1. declarando uma variavel comum
$cookie = "chocolate";

// criando uma ref
$copiaporref = $$cookie;

//modificando o valor atraves da variavel 
$copiaporref = "vermelho";

//ambas as variaveis exibem "vermelho", pois apontam para

echo "original:" . $cookie. "\n"; //imprime 2 original vermelho
echo "referencia" . $copiaporref . "\n"; //