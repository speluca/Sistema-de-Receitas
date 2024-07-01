<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Receitas</title>
</head>
<body>
    <h1>Listagem de Receitas</h1>

<!-- A -->
    <?php
    // Conectar ao banco de dados (substitua pelos seus dados)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "receitas";

    // Criar conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Query SQL para selecionar todas as receitas
    $sql = "SELECT * FROM receitas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibir os dados encontrados em uma tabela
        echo "<table border='1'>";
        echo "<tr><th>Título</th><th>Descrição</th><th>Ingredientes</th><th>Modo de Preparo</th><th>Tempo de Preparo</th><th>Porções</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["titulo"]."</td>";
            echo "<td>".$row["descricao"]."</td>";
            echo "<td>".$row["ingredientes"]."</td>";
            echo "<td>".$row["modo_preparo"]."</td>";
            echo "<td>".$row["tempo_preparo"]." minutos</td>";
            echo "<td>".$row["porcoes"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Não há receitas cadastradas.";
    }

    // Fechar a conexão
    $conn->close();
    ?>
</body>
</html>
