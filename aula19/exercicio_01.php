<?php
$lista = array(
    array("Banco de Dados", 70),
    array("Analise de Sistemas", 68),
    array("Ciencias da Computacao", 80),
    array("Front-End", 90),
    array("Portugues", 70),
    array("Matematica", 100),
    array("Historia", 100),
    array("Geografia", 100),
    array("Quimica", 60),
    array("Biologia", 65),
    array("Sociologia", 70),
    array("Projeto de Vida", 90),
    array("Educacao Financeira", 100),
    array("Ingles", 80),
);
echo "<br/><br/><br/>";

foreach($lista as $item){
    echo $item[0]."-".$item[1]."<br/>";
}

?>