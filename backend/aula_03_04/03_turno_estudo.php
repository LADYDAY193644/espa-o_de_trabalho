<?php
//receber a letra que irá corresponder o turno do aluno;
//se o turno for para Matutino M,"BOM DIA!"
//se o turno for para vespertino V,"BOA TARDE!"
//se o turno for para noturno N,"BOA NOITE!"
// qualquer outra entrada turno "INVÁLIDO!" 
$turno = "M" ;
if($turno = "M"){
  echo "Bom dia!" ;
 } else if($turno ="V"){
  echo "Boa tarde!";
}else if($turno ="N") {
  echo "Boa noite!";
}else {
  echo "Inválido!";
}

 //correção do exercicio;
//  $turno = "M" ;
// if($turno == "M"){
//   echo "Bom dia!" ;
// } else if($turno =="V"){
//   echo "Boa tarde!";
// }else if($turno =="N") {
//   echo "Boa noite!";
// }else {
//   echo "turno inválido!";
// }





?>