<?php include("functions/conexao.php")?>
<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>
        <link href="style/style.css" rel="stylesheet">
    </head>
    <body>

        <form method="POST" action="functions/insert.php">
            <div class="form">
                <h3>CADASTRAR</h3>
                <input type="text" id="nome" name="nome" placeholder="nome do livro"><br><br>
                <input type="text" id="genero" name="genero" placeholder="gênero"><br><br>
                <button id="btn1"><a href="functions/insert.php"></a>Cadastrar</button>
            </div>
        </form>
        
        <table id="tblexibe" class="tbl">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Gênero</th>
                <th>Excluir</th>
                <th>Editar</th>
            </tr>
            <?php 
            $query = mysqli_query($conexao, "SELECT * FROM livro;");
            while($exibe = mysqli_fetch_array($query)){
        ?>
            <tr>
                <td><?php echo $exibe[0]?></td>
                <td><?php echo $exibe[1]?></td>
                <td><?php echo $exibe[2]?></td>
                <td><a href="functions/delete.php?idu='<?php echo $exibe[0]?>'">X</a></td>
                <td><a href="edit-page.php">X</a></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>