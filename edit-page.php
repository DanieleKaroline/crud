<?php include("functions/conexao.php")?>
<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link href="style/style.css" rel="stylesheet">
    </head>
    <body>

        <form method="POST" action="functions/edit.php">
            <div class="form">
                <h3>EDITAR</h3>
                <input type="text" id="id" name="id" placeholder="id do livro"><br><br>
                <input type="text" id="nome" name="nome" placeholder="nome do livro"><br><br>
                <input type="text" id="genero" name="genero" placeholder="gênero"><br><br>
                <button id="btn1"><a href="functions/edit.php"></a>Editar</button>
            </div>
        </form>

         <a href="index.php"><button class="btnv">Voltar</button></a>