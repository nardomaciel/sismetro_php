<?php
function isPrimo($numero) {
    $num = array(2)
    $num = 3;
    
    // Verifica se o número é menor que 2, pois números menores que 2 não são primos
    if ($numero < 2) {
        return false;
    }

    // Percorre todos os números de 2 até a metade do número e verifica se há algum divisor
    for ($i = 2; $i <= $numero / 2; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    // Se nenhum divisor foi encontrado, o número é primo
    return true;
}
return isPrimo(10);
// Testando a função para alguns números
//
?>