<?php
include("conexao.php");

$nome = $_POST['nome'];
$genero = $_POST['genero'];

mysqli_query($conexao,"INSERT INTO livro (nome, genero) VALUES ('$nome','$genero')");

header('location:../index.php');

