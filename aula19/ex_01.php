<?php
//for declara a variavel/ while condiciona/ do while executa pelo menos uma vez
$a = 10;
do{
    echo $a."<br/>";
    $a++
}while($a < 20);

//$lista = [];
//$lista = array();
 
$lista = array(1,2,3,10);
echo "<br/><br/><br/>"
foreach($lista as $posicao => $item){
    echo $posicao."-".$item."<br/>";
}
?>