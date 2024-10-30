<?php
class Animal{
 protected $nome;
 protected $idade;
 protected $cor;
     
  public function __construct($nome,$idade,$cor){
    $this ->nome = $nome;
    $this ->idade = $idade;
    $this ->cor = $cor;             
  }
  public function FazendoBarulho(){
     echo "Fazendo Barulho";               
  }

}








?>