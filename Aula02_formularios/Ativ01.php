<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Crie um formulário HTML com um campo de texto para o nome e um botão de envio. Ao enviar o formulário, exiba
        a mensagem "Olá, {nome}!" utilizando o valor inserido no campo de texto. </title>

</head>
<body>


<form>
    Insira Seu Nome:
    <input name="nome">
    <button type="submit">Enviar</button>

</form>

<?php

$nome = $_GET["nome"];

echo "Olá " . $nome;
?>

</body>
</html>