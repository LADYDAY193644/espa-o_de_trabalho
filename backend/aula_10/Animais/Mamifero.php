<?php
require_once 'Animal.php';
class Mamifero extends Animal
{
  private $Patas;

 
  public function FazendoBarulho()
{
   echo "Fazendo Barulho";
 }
 
 public function __construct($nome,$idade,$cor,$Patas,){
    parent ::__construct($nome,$idade,$cor,);
    $this -> Patas = $Patas;

}
}