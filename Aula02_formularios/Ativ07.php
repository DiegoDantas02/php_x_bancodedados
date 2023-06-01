<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>


</head>

<body>

    <P>Crie um formulário que solicite ao usuário uma lista de compras,
        onde cada item é inserido em um campo de texto separado. Ao enviar o formulário, exiba a lista de compras completa. </P>



        <!DOCTYPE html>
<html>
<head>
    <title>Formulário de Lista de Compras</title>
</head>
<body>

<h2>Lista de Compras</h2>

<!-- server[PHP_SELF] serve para reenviar o formulario para a propria pagina -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!-- Campos de texto para itens de compra -->
    <input type="text" name="items[]" required><br>
    <input type="text" name="items[]" required><br>
    <input type="text" name="items[]" required><br>
<!-- botão de enviar o conteudo -->
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os valores dos campos de texto e armazena no array $items
    $items = $_POST['items'];

    // Exibe o título "Lista de Compras:"
    echo "<h2>Lista de Compras:</h2>";

    // Exibe os itens da lista de compras em uma lista não ordenada
    echo "<ul>";
    foreach ($items as $item) {
        echo "<li>" . htmlspecialchars($item) . "</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>
