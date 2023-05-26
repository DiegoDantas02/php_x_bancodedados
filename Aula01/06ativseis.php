<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title> Atividade 06</title>

</head>

<body>

    <?php
    echo "<h1>Crie uma variável chamada .valor. e atribua a ela um número. Verifique se o valor é positivo, negativo ou zero, e exiba a mensagem correspondente. </h1>";

    $valor = 0;

    if($valor > 0 ){
        echo "O valor Selecionado é  positivo: "  . $valor;
    }elseif($valor < 0){
        echo "O Valor Selecionado é negativo: " . $valor;
    }elseif($valor == 0){
        echo "O Valor Selecionado é zero: " . $valor;

    }

    ?>

</body>

</html>