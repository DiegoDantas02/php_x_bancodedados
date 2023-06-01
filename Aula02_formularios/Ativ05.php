<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Atividade 05</title>

</head>

<body>

    <!-- <p>Crie um formulário que solicite ao usuário uma série de números separados por vírgula. Ao enviar o formulário, separe os números em um array em PHP e exiba a soma de todos os números.</p>
<FORM>
    <h1>Digite uma serie de Numeros com virgulas</h1>
    <input name="number">
    <button type="submit">Enviar</button>
</FORM>

    <?php
    
    ?> -->
    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numeros = $_POST['numeros'];
    $arrayNumeros = explode(',', $numeros);
    $soma = array_sum($arrayNumeros);
    echo "A soma dos números é: " . $soma;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Números</title>
</head>
<body>
    <form method="POST" action="">
        <label for="numeros">Digite uma série de números separados por vírgula:</label><br>
        <input type="text" name="numeros" id="numeros"><br><br>
        <input type="submit" value="Calcular Soma">
    </form>
</body>
</html>


</body>
</html>