<?php
//tipos de dados em variáveis
$nome = "Maria" ; // string
$idade = 18 ; //number, inteiro
$altura = 1.62 ; //number, decimal
$matriculado = true ; // boolean
$materias = array("Matemática","História","física"); // array

// echo "\n nome: "  . $nome;
// echo "\n idade: "  . $idade;
// echo "\n altura: "  . $altura . "m";
// echo "\n matriculado: "  . ($matriculado ? "sim" : "não");
// echo "\n materias: "  . implode(" , " ,$materias);

//estruturas condicionais - if,else if,else
//se a nota for a aprtir de 6, ele passou de série
// $notaFinal = 3;
// if( $notaFinal >= 6){
//    echo "Aluno Aprovado!" ;
// } else if($notaFinal < 6){
//    echo "Aluno Reprovado!";                 
// }else{
//    echo "Nota inválida!";                 
// }
//operadores de comparação
// >= - maior e igual
// <= - menor e igual
// > - maior
// >  - menor
// == -  menor
// != - diferente

//operadores lógicos
// and(e) - && - true e true = true
// or(ou) -|| - true e false = true
// Para a aluna ser aprovada,precisa a nota final seja a partir de 60 E a frequencia seja apartir de 75%.
// $notaAlunaFinal = 70 ;
// $frequenciaAluna = 85; // percentual de presença
// if($notaAlunaFinal >= 60 && $frequenciaAluna >= 75) {
//    echo "Aluna aprovada!";                 
// } else{
//    echo"Aluna reprovada!";                 
// }

 // Para a aluna ser aprovada,precisa a nota final seja a partir de 60 E a frequencia seja apartir de 75%;
  $notaAlunaFinal = 70 ;
  $frequenciaAluna = 45; // percentual de presença
  if($notaAlunaFinal >= 60 || $frequenciaAluna >= 75){
     echo "Aluna aprovada!";
  }








?>