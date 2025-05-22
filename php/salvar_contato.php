<?php
$host = "localhost";
$user = "root";
$senha = "";
$banco = "maissaude";

// Conectar
$conn = new mysqli($host, $user, $senha, $banco);

// Verifica erro
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Dados do formulário
$nome = $_POST['nome'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$mensagem = $_POST['mensagem'];

// Inserir no banco
$sql = "INSERT INTO mensagens_contato (nome, empresa, email, telefone, mensagem) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $nome, $empresa, $email, $numero, $mensagem);

if ($stmt->execute()) {
    echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href = 'contato.php';</script>";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
