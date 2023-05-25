<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Atividade 02</title>

</head>

<body>

    <!-- Crie uma variável chamada "idade" e atribua a ela um valor numérico. Verifique se a idade é maior ou igual a 18. Se for, exiba a mensagem "Você é maior de idade". Caso contrário, exiba a mensagem "Você é menor de idade".  -->


    <hr>
    <!DOCTYPE html>
<html>
<head>
    <title>Verificação de Idade</title>
</head>
<body>
    <form method="POST" action="">
        <label for="idade">Digite sua idade:</label>
        <input type="number" id="idade" name="idade">
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idade = $_POST['idade'];

        if ($idade >= 18) {
            echo "Você é maior de idade. Idade: " . $idade;
        } else {
            echo "Você é menor de idade. Idade: " . $idade;
        }
    }
    ?>
</body>
</html>

</body>

</html>