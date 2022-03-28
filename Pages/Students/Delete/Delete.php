<?php 
include("../../../DB/conexao-BD.php");
$sql = "DELETE FROM alunos WHERE id =".$_GET['id']; 

$stmt = $db->prepare($sql);
$stmt->execute();

header("Location: ../../Index/index.php");
?>