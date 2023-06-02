<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <P>Implemente um formulário que receba as notas de um aluno em três disciplinas. Ao enviar o formulário, calcule a média das notas e exiba o resultado. </P>
  
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="nota1">Nota da Disciplina 1:</label>
    <input type="number" name="nota1" step="0.01" required><br>

    <label for="nota2">Nota da Disciplina 2:</label>
    <input type="number" name="nota2" step="0.01" required><br>

    <label for="nota3">Nota da Disciplina 3:</label>
    <input type="number" name="nota3" step="0.01" required><br>

    <input type="submit" value="Calcular Média">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    echo "<h3>Média das Notas:</h3>";
    echo "<p>A média das notas é: " . number_format($media, 2) . "</p>";
}
?>

</body>
</html>