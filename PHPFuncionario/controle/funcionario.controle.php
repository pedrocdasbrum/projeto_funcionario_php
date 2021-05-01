<?php
  include "../modelo/funcionario.class.php";

  $f = new Funcionario;

  $f->nome = $_POST['nome'];
  $f->cargo = $_POST['cargo'];
  $f->matricula = $_POST['matricula'];
  $f->valorHora = $_POST['valorhora'];
  $f->totalHoras = $_POST['totalhoras'];

  header("Location:../visao/funcionario.resposta.php?&nome=$f->nome&cargo=$f->cargo&matricula=$f->matricula&valorhora=$f->valorHora&totalhoras=$f->totalHoras&salario={$f->salario()}");

  $f->__destruct();
 ?>
