<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

if($usuario == "diego@wolf.com" && $senha == 1234){
    header("location:painel.php");
}else{
    header("location:usuario-invalido.php");
}
?>