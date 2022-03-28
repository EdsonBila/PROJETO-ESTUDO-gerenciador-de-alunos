<?php
include("../../DB/conexao-BD.php");

$stmt = $db->prepare("SELECT id, nome, email, telefone, curso FROM alunos");
$stmt->execute();

foreach($stmt->fetchAll() as $k=>$row)  {
  echo "<tr>" .
  "<td>" . $row['nome'] . "</td>
  <td>" . $row['email'] . "</td>
  <td>" . $row['telefone'] . "</td>
  <td>" . $row['curso'] . "</td>
  <td> <a href='../Students/Edit/index.php?id=" . $row["id"] . "&nome=".$row["nome"]."&email=".$row["email"]."&telefone=".$row["telefone"]."&curso=".$row["curso"]."'>Edit</a>&nbsp;<a href='../Students/Delete/Delete.php?id=" . $row["id"] . "'>Delete</a></td></tr>";
}

?>
