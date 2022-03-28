<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Gerenciador de Alunos</title>
  <link rel="stylesheet" href="../../CSS/index-table.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
</head>

<body>
  <h1>Index</h1>
  <p>
    <a href="../Students/Create/index.php">Cadastrar Novo Aluno</a><br>
  </p>

  <div class="table-div">
    <table>
      <thead class="titulos-tabe">
        <tr class="tr-titulo">
          <th>Nome</th>
          <th>E-mail</th>
          <th>Telefone</th>
          <th>Curso</th>
          <th></th>
        </tr>
      </thead>
      <tbody class="corpo-table">
        <?php
          include("listar-alunos.php");
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>