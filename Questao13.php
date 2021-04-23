<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op12"])){
    $_SESSION["op12"] = $_POST["op12"];
}else{
    $_SESSION["op12"] = $_SESSION["op12"];
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
<h2>Questão 13</h2>


<p>No programa abaixo qual o valor será exibido para a variável $total?</p>

<img src="Img/q13.PNG">

<form action="Questao14.php" method="post">
    <input type="radio" name="op13" value="0">
    <label>(A) $preco = $GET[“txtvalor”];</label><br>
    <input type="radio" name="op13" value="0">
    <label>(B) $preco = $_GET[“txtvalor”];</label><br>
    <input type="radio" name="op13" value="0">
    <label>(C) $preco = $POST[“txtvalor”];</label><br>
    <input type="radio" name="op13" value="1">
    <label>(D) $preco = $_POST[“txtvalor”];</label><br>
    <input type="radio" name="op13" value="0">
    <label>(E) $preco = [“txtvalor”];</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao12.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html