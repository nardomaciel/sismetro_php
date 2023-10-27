<?php
function isPrimo($num) {
    // Verifica se o número é menor que 2, pois números menores que 2 não são primos
    $num = array();
    $num[0]= 1;
    $num[1]= 2; 
    if ($num < 2) {
        return false;
    }

    // Percorre todos os números de 2 até a metade do número e verifica se há algum divisor
    for ($i = 2; $i <= $num[0]; $i++) {
        if ($num%$i == 0) {
            return false;
        }
    }

    // Se nenhum divisor foi encontrado, o número é primo
    return true;
    
}
echo isPrimo(10);
?>