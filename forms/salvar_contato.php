<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Salvar contato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    $sql = "INSERT INTO contatos (nome, email, assunto, mensagem) VALUES ('$nome', '$email', '$assunto', '$mensagem')";

    if ($conn->query($sql) === TRUE) {
        echo "Contato salvo com sucesso!";
    } else {
        echo "Erro ao salvar contato: " . $conn->error;
    }
}

$conn->close();
?>