<?php 
include("conexao.php");

mysqli_query($conexao,"DELETE FROM livro WHERE id = ".$_GET['idu'].";");

header("location:../index.php");
?>