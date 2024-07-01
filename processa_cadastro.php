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

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário e validar
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $ingredientes = $_POST['ingredientes'];
    $modo_preparo = $_POST['modo_preparo'];
    $tempo_preparo = $_POST['tempo_preparo'];
    $porcoes = $_POST['porcoes'];

    // Preparar a query SQL usando prepared statements
    $sql = "INSERT INTO receitas (titulo, descricao, ingredientes, modo_preparo, tempo_preparo, porcoes) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssii", $titulo, $descricao, $ingredientes, $modo_preparo, $tempo_preparo, $porcoes);

    // Executar a query
    if ($stmt->execute()) {
        echo "Receita cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar a receita: " . $stmt->error;
    }

    // Fechar o statement
    $stmt->close();
}

// Fechar a conexão
$conn->close();
?>
