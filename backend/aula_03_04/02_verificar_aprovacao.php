<?php
//classificar em aprovado com distinção,aprovado e reprovado;
$notaFinal = 9;
if( $notaFinal >= 9){
   echo "Aprovado com distinção!" ;
} else if($notaFinal >=6 && $notaFinal<9){
  echo "Aprovado!";
}
 else {
  echo "Reprovado!";
}

//correção do exercicio;
// $nota = 4.5;
// if( $notaFinal >= 9){
//    echo "Aprovado com distinção!" ;
// } else if($nota >=6) {
//   echo "Aprovado!";
// } else {
//   echo "Reprovado!";
// }


?>