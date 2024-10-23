<?php
$numeroAlunos = 3;
$boletim = [];

for($i = 1; $i <= $numeroAlunos; $i++){
    $nome = readline("Digite o nome do aluno $i:");
    $nota1 = readline("Digite a primeira nota: "); 
    $nota2 = readline("Digite a segunda nota: "); 
    $media = ($nota1 + $nota2) / 2;

    $boletim[$nome] = $media;
}
echo"Boletim Escolar: \n";
foreach($boletim as $aluno => $media){
    echo "$aluno - media: $media\n";                
}

echo "Resultados finais: \n";
foreach($boletim as $aluno => $media){
     if($media .= 6){
         echo"$aluno foi Aprovado com média $media.\n";           
     }else{
         echo "$aluno foi Reprovado com média $media.\n";           
     }              
}




?>