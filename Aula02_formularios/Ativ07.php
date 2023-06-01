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

    

<h2>Lista de Compras</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="items[]" required><br>
    <input type="text" name="items[]" required><br>
    <input type="text" name="items[]" required><br>

    <!-- Adicione mais campos de item aqui, se necessário -->

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $items = $_POST['items'];
    echo "<h2>Lista de Compras:</h2>";
    echo "<ul>";
    foreach ($items as $item) {
        echo "<li>" . htmlspecialchars($item) . "</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>