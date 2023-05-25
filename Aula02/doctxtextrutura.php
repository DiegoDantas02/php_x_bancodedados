<?php
//[curiosidade]operador ternario php/funciona como extrutura de decissão
/*
if
if else
if else if
 */
echo "<br>";
$idade = 20;
if ($idade >= 18) {
    echo "Pode dirigir"; //verdadeiro
}elseif($idade == 17){
    echo "Volte Ano Que Vem";
} else {
    echo "Não pode dirigir"; //false
}
