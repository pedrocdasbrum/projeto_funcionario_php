<?php
  class Funcionario
  {
    private $nome;
    private $cargo;
    private $matricula;
    private $valorHora;
    private $totalHoras;

    function __construct()
    {}

    function __destruct()
    {}

    function __get($atributo)
    {
      return $this->$atributo;
    }

    function __set($atributo, $valor)
    {
      return $this->$atributo = $valor;
    }

    function salario()
    {
      return $this->valorHora * $this->totalHoras;
    }

    function __toString()
    {
      return nl2br("Nome: $this->nome.
                    Cargo: $this->cargo.
                    Matrícula: $this->matricula.
                    Salário: {$this->salario()}.");
    }
  }
 ?>
