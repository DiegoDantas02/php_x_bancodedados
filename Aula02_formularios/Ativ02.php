<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Atividade 02</title>

</head>
<body>

    <p>Escreva um programa que receba os dados de um formulário HTML contendo os campos "idade" e "altura". Valide se os campos foram preenchidos corretamente e exiba uma mensagem com os valores informados</p>

    <form>

       <h1> Digite Sua Idade:</h1>

        <input type="idade" name="idade"><br> <br>
        <h1>Digite Sua altura:</h1>

        <input type="altura" name="altura"> <br> <br>
        <button type="submit">Enviar</button> 
        <button type="submit">Limpar</button>

    </form>
    
    <?php
    $altura = $_GET["altura"];
    echo "<h1>Sua Altura é:</h1>" . "<h2>$altura</h2> <br>"; 

    $idade = $_GET["idade"];
    echo "<h1>Sua idade é: </h1>" . "<h2>$idade</h2><br>";

    ?>

</body>
</html>