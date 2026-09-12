<?php
/*a variavel global
a principal caracteristica da variavel global e ser declarada fora de funções;
por comportamento padrao nao sao acessiveis dentro de funçoes
precisamos utilizar a palavra global para isso;
essa função da variavel global nao ser acessivel dentro de funcoes
previne muito problemas no softaware
*/

$teste = "sim";
echo "$teste global 1 <br>";

if (5 >2) {
    $teste = "não";

    echo "$teste if <br>";
}

echo "$teste global 2 <br>";

function funcao() {
    $teste = "rsrs";

    echo "$teste local <br>";}

    funcao();

    function testando_global() {
        global $teste;
        $teste = 2;
        echo "$teste global funcao <br>";
    }

    testando_global(); {
        echo"$teste funcao global 3 <br>";
    }