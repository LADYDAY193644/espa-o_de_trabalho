<?php
//importa a classe do animal e Mamifero
require_once 'Animal.php';
require_once 'Mamifero.php';

class Main {
    public static function run(){
//instanciando um objeto da classe Animal
  $animal1 = new Animal("Leão",5,"amarelo");
  $animal2 = new Animal("cachorro",5,"caramelo");
  $animal1->comunicar(); 
  
  $mamifero1 = new Mamifero("Baleia",103,"azul",0);
  $mamifero2 = new Mamifero("Gato",1,"preto",4);
  $mamifero1->FazendoBarulho();1
 }                
}

Main::run();








?>