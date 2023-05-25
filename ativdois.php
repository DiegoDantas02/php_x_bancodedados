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
<label input="submit"> Qual Sua idade? </label>
<br>
<input type="button" value="Exibir"> 

<form>
<?php

$idade = "idade";

if($idade >= 18){
    echo "Você é Maior de idade!!.";
}else {
    echo "Você é Menor de idade!!!.";
}
?> 
    </form>
</body>
</html>