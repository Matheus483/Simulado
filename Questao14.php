<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op13"])){
    $_SESSION["op13"] = $_POST["op13"];
}else{
    $_SESSION["op13"] = $_SESSION["op13"];
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Simulado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Questão 14</h2>


<p>Determine o primeiro valor assumido pela variável $total noprograma:</p>

<img src="Img/q14.PNG" width=400 height=200>

<form action="Resultado.php" method="post">
    <input type="radio" name="op14" value="0">
    <label>(A) $preco = $GET[“txtvalor”];</label><br>
    <input type="radio" name="op14" value="0">
    <label>(B) $preco = $_GET[“txtvalor”];</label><br>
    <input type="radio" name="op14" value="0">
    <label>(C) $preco = $POST[“txtvalor”];</label><br>
    <input type="radio" name="op14" value="1">
    <label>(D) $preco = $_POST[“txtvalor”];</label><br>
    <input type="radio" name="op14" value="0">
    <label>(E) $preco = [“txtvalor”];</label><br><br><br>
    <button type="submit">Finalizar</button>
</form>
<br>
<form action="Questao13.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html