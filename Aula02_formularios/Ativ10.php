<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
</head>
<body>

<h2>Formulário de Contato</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" required><br>

    <label for="mensagem">Mensagem:</label>
    <textarea name="mensagem" required></textarea><br>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Exibir os dados enviados
    echo "<h3>Dados enviados:</h3>";
    echo "<p>Nome: $nome</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Mensagem: $mensagem</p>";
}
?>

</body>
</html>
