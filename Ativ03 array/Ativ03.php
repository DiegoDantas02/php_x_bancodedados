<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Crie um array associativo chamado "aluno" com as seguintes chaves: "nome", "idade" e "nota". Atribua valores a essas chaves e imprima o conteúdo do array. </p>

    <?php
    $aluno = array(
        "nome" => "Diego",
        "idade" => 22,
        "nota" => 9.5
    );
    echo "Nome: " . $aluno["nome"] . "<br>";
    echo "Idade: " . $aluno["idade"] . "<br>";
    echo "Nota: " . $aluno["nota"] . "<br>";
    
    ?>
</body>

</html>