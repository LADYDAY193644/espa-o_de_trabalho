<?php
class Aluno
{
   //atributos - caracteristicas
   //Por padrão todo atributo de uma classe é privado(private).
   private $nome;
   private $idade;
   private $matriculado = true;
   private $notas = [];

   public function __construct($nome, $idade)
   {
      $this->nome = $nome;
      $this->idade = $idade;
   }


   public function getNome()
   {
      return $this->nome;
   }
   public function getIdade()
   {
      return $this->idade;
   }

   public function setNome($nome)
   {
      $this->nome  = $nome;
   }
   public function setIdade($idade)
   {
      $this->nome  = $idade;
   }
   //metodos - ações 
   //Por padrão,todo método de uma classe é publico(public).
   public function situacao()
   {
      if ($this->matriculado == true) {
         $this->matriculado = false;
      } else if ($this->matriculado == false) {
         $this->matriculado = true;
      }
   }

   public function exibirDados()
   {
      echo "Nome: $this->nome \n";
      echo "Idade: $this->idade \n";
      echo "Situação: $this->matriculado \n";
   }
}

$aluno1 = new Aluno("Ana", 15);
$aluno2 = new Aluno("Carlos", 17);
$aluno3 = new Aluno("Lucas", 16);
$aluno3->setIdade(15);

$aluno1->exibirDados();
$aluno2->exibirDados();

$aluno3->situacao();
$aluno3->exibirDados();



?>
