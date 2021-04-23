<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op14"])){
    $_SESSION["op14"] = $_POST["op14"];
}else{
    echo "<script>
                alert('Não foi marcada nenhuma opção');
                window.location.href = 'Index.html'; //redirecionando para a pagina de produtos
            </script>";
}

$Resultado = 0;
$Corretas = 0;
$Erradas = 0;

if($_SESSION["op1"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op2"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op3"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op4"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op5"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op6"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op7"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op8"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op9"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op10"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op11"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op12"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op13"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

if($_SESSION["op14"] == 1){
    $Corretas++;
}else{
    $Erradas++;
}

$Resultado = $Corretas;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>A sua pontuação final é de: <?php echo $Resultado ?> pontos</h2>

<p>A quantidade de Questões corretas foi de <?php echo $Corretas ?></p>
<p>A quantidade de Questões erradas foi de <?php echo $Erradas ?></p>

</body>
</html>
