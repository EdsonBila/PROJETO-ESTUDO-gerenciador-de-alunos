<?php
    $action = "Create.php";
?>
  <!DOCTYPE html> 
  <html lang="pt-br"> 
    <head> 
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/meu_css.css" >
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="UTF-8">
    </head> 
    <body> 
      <h1>Cadastro Alunos</h1>
      <form action="<?php echo $action ?>"  method="post">
        <label>
          Nome:<input type="text" name="nome">
        </label><br>
        <label>
          E-mail:<input type="text" name="email">
        </label><br>
        <label>
          Telefone:<input type="text" name="telefone">
        </label><br>
        <label>
          Curso:<input type="text" name="curso">
        </label><br>
        <button type="submit">Cadastrar</button>
      </form>
      <a href="../../Index/index.php">Ver Alunos cadastrados</a>
    </body> 
  </html>
  