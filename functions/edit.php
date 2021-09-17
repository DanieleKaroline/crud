<?php include("conexao.php");
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$id = $_POST['id'];


mysqli_query($conexao, "UPDATE livro SET nome ='$nome', genero ='$genero' WHERE id = '$id';");

header("location:../edit-page.php");