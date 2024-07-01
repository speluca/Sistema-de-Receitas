<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="processa_cadastro.php" method="POST">
            <label>Título:</label><br>
            <input type="text" name="titulo" required><br>
            
            <label>Descrição:</label><br>
            <textarea name="descricao" required></textarea><br>
            
            <label>Ingredientes:</label><br>
            <textarea name="ingredientes" required></textarea><br>
            
            <label>Modo de Preparo:</label><br>
            <textarea name="modo_preparo" required></textarea><br>
            
            <label>Tempo de Preparo (minutos):</label><br>
            <input type="number" name="tempo_preparo" required><br>
            
            <label>Porções:</label><br>
            <input type="number" name="porcoes" required><br>
            
            <input type="submit" value="Cadastrar Receita">
        </form>

</body>
</html>