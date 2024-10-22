<?php
//Escreva um programa que peça para o usuario digitar numeros.
//Some todos os numeros inseridos e pare a execuçao do while quando o usuario digitar 0.Em seguida, exiba o total da soma.
$soma = 0 ;
while(true){
     $numero = readline("digite um número (0 para sair):") ;
     if($numero == 0){
         break; //quebra, sai do loop while;           
     }
     $soma = $soma + $numero;
}
    echo "A soma total é:  "  . $soma .  "\n";

?>