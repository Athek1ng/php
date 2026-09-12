<?php
/*
variavel estatica
a variavel estatica e declarada com a instrução static
o valor da mesma e mantido e alterado a cada execução de uma função
é interesssante este comportamento pois as variaveis de escopo local sem sao resetadas;
*/
function teste() {
    $a = 0;
    $a++;

    echo "$a <br>";

}

teste();
teste();
teste();

function testestatic() {
static $a = 0;
$a++;
echo "$a <br>";
}

testestatic();
testestatic();
testestatic();