<?php
// Verifica se o método de requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
    // Aqui você poderia adicionar validações, processamento adicional, envio por email, etc.
    
    // Exemplo simples de exibição dos dados enviados
    echo "<h2>Dados Recebidos:</h2>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Mensagem:</strong> $mensagem</p>";
} else {
    // Se não for POST, redireciona para o formulário
    header("Location: formulario.php");
    exit();
}
?>
