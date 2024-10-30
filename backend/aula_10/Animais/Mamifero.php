<?php
class Mamifero extends Animal
{
  private $quantidadeDePatas;

 
  public function FazendoBarulho()
{
   echo "Fazendo Barulho";
 }
 
 public function __construct($nome,$idade,$cor,$quantidadeDePatas,){
                    parent ::__construct($nome,$idade,$cor,);
                    $this ->quantidadeDePatas = $quantidadeDePatas;

}
}
