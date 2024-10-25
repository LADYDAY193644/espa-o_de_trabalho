<?php
class Aluno {
    //atributos - caracteristicas
    //Por padrão todo atributo de uma classe é privado(private).
    private $nome;
    private $idade;
    private $matriculado = true;
    private $notas = [];

    public function getNome(){
       return $this -> nome;             
    }

    public function setNome($nomeNovo){
       $this -> $nomeNovo;
    }
    //metodos - ações 
    //Por padrão,todo método de uma classe é publico(public).
    public function situacao(){
        if($this -> matriculado == true){
           $this-> matriculado = false;         
        }else if($this -> matriculado == false){
           $this-> matriculado = true;    
        }
    }               
}


?>