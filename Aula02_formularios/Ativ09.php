<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <P>Crie um formulário que solicite ao usuário um número. Ao enviar o formulário, verifique se o número é par ou ímpar e exiba uma mensagem correspondente. </P>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required> <br> <br>
        <!-- --------------- -->
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if ($numero % 2 == 0) {
            echo "<h3>O número " . $numero . " é par.</h3>";
        } else {
            echo "<h3>O número " . $numero . " é ímpar.</h3>";
        }
    }
    ?>

</body>

</html>