<?php
include("../../../DB/conexao-BD.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$curso = $_POST["curso"];

$sql = "INSERT INTO alunos (nome, email, telefone, curso) VALUES ('$nome', '$email', '$telefone', '$curso')";
$stmt = $db->prepare($sql); 
$stmt->execute();

header("Location: ../../Index/index.php");
?>


