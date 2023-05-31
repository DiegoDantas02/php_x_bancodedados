<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>


</head>
<body>
    <p>Crie um formulário que solicite ao usuário um número e exiba a tabuada de multiplicação desse número utilizando PHP.</p>
    <form method="post">
        <input type="number" name="numero" placeholder="Digite um número" required>
        <br> <br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    $numero = isset($_POST["numero"]) ? $_POST["numero"] : '';

    if ($numero !== '') {
        echo "<h3>Tabuada do $numero:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }
    ?>
</body>
</html>