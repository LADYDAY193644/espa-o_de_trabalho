<?php
$aulasDadas = 40;
$faltas =5 ;
$aulasAssistidas = $aulasDadas - $faltas ;
$frequencia = ($aulasAssistidas / $aulasDadas)* 100;

if($frequencia>= 75){
   echo "A aluna está apta para fazer a prova final." ;                 
}else{
   echo "A aluna não está apta para fazer a prova final." ;                 
}





?>