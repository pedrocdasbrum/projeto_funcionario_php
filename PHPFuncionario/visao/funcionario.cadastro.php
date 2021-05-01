<!DOCTYPE html/>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
          crossorigin="anonymous">
  </head>
  <body class="p-3 mb-2 bg-secondary text-white">
    <h1 class="p-3 mb-2 bg-dark text-white">Cadastro do Funcionário</h1>
    <form method="post"
          action="../controle/funcionario.controle.php">
        <div class="form-group">
            <input type="text" name="nome" placeholder="Nome" class="form-control">
        </div>
        <div class="form-group">
            <input type="text" name="cargo" placeholder="Cargo" class="form-control">
        </div>
        <div class="form-group">
            <input type="number" name="matricula" placeholder="Matrícula" class="form-control">
        </div>
        <div class="form-group">
            <input type="number" name="valorhora" placeholder="Valor por hora" class="form-control">
        </div>
        <div class="form-group">
            <input type="number" name="totalhoras" placeholder="Total de horas" class="form-control">
        </div>
        <div class="button-group">
          <button type="submit" class="btn btn-light">Cadastre-se</button>
          <button type="reset" class="btn btn-light">Limpar</button>
        </div>
    </form>
  </body>
</html>
