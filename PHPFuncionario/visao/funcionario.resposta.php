<!DOCTYPE html/>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dados</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
          crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-secondary text-white">
    <h1 class="p-3 mb-2 bg-dark text-white">Dados do Funcionário</h1>
    <h3 class="p-3 mb-2 bg-dark text-white">Dados Para Conferência</h3>
    <?php
      echo "<p>Nome: ".$_GET['nome']."."."</p>"
           ."<p>Cargo: ".$_GET['cargo']."."."</p>"
           ."<p>Matrícula: ".$_GET['matricula']."."."</p>"
           ."<p>Valor por hora: R$".$_GET['valorhora']."."."</p>"
           ."<p>Total de horas: ".$_GET['totalhoras']." horas."."</p>"
           ."<p>Salário: R$".$_GET['salario']."."."</p>";
     ?>
  </body>
</html>
