<?php
$nota1 = 7.0 ;
$nota2 = 8.5 ;
$nota3 = 6.0 ;

$media = ($nota1 + $nota2 +$nota3) /3;
if($media >= 7){
  echo "Aprovado!";                  
}else if($media >= 5){
  echo "Recuperação";                  
}else {
  echo "Reprovado";                  
}




?>