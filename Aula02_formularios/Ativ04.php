<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
</head>

<body>
    <p>Implemente um formulário que receba o nome e a idade de várias pessoas. Ao enviar o formulário, exiba a lista de pessoas cadastradas com seus respectivos nomes e idades. </p>

    <input method="post" name="nome" placeholder="Insira Seu Nome"><br> <br>
    <input name="idade" placeholder="Insira Sua Idade"> <br> <br>
    <button type="submit">Enviar</button>
    </form>
    <?php
    $nome = $_POST["nome"];
    echo "Seu nome é: " . $nome;
    $idade = $_POST["idade"];
    echo "Sua Idade é: " . $idade;

    ?>
</body>

</html>