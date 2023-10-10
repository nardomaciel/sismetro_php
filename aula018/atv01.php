 <?php
 echo $a = 5;
 echo $b = 2;

 $soma=$a + $b;
 echo $soma. "<br/>";

 $subtracao=$a - $b;
 echo $subtracao. "<br/>";
  
 $divisao=$a / $b;
 echo $divisao. "<br/>";

 $multiplicacao=$a * $b;
 echo $multiplicacao. "<br/>";

 if($soma < 10){
    echo "soma menor que 10 <br/";
 }else{
    echo "soma maior ou igual a 10 <br/>";
 }

 if($subtracao > 20){
    echo "subtracao maior que 20 <br/>";
 }elseif($subtracao == 20){
    echo "subtracao igual a 20 <br/>";
 }else{
    echo "subtracao menor que 20 <br/>";
 }
 $v = 0;

 switch($v){
    case 12:
    case 11:
    case 10:
        echo "oi";
        break;
    case 9:
        echo "ola";
        break;
    case 8:
        echo "ola";
        break;
    default:
    echo "oi";
}
 ?>