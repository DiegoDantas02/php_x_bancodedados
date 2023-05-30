<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Atividade 10</title>

</head>

<body>
    <p>"Crie um programa que verifique se uma pessoa tem direito a voto. Solicite a idade da pessoa através de um formulário e, se a idade for igual ou superior a 16 anos, exiba a mensagem "Você tem direito a voto". Caso contrário, exiba a mensagem "Você ainda não tem direito a voto". ";</p>
    
    <form>
    <input type="number">
    <button type="submit">Enviar</button>
    </form>

    <br>
        <br>

    <?php
    $number = $_GET["number"];

    if($number >= 16 ){
        echo "<h2>Você TEM direito ao Voto!!!</h2>" . "<h1>$number</h1>";
    }else {
        echo "<h2>Você NÃO tem direito  ao Voto!!</h2>" . "<h1>$number</h1>";
    }

    ?>

</body>

</html>