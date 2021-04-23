<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op1"])){
    $_SESSION["op2"] = $_POST["op2"];
}else{
    $_SESSION["op2"] = $_SESSION["op2"];
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
<h2>Questão 3</h2>

<p>Como declarar uma variável no PHP para receber um valor de informado no input?</p>

<img src="Img/q3.PNG">

<form action="Questao4.php" method="post">
    <input type="radio" name="op3" value="0">
    <label>(A) $num = $_POST[“text”];</label><br>
    <input type="radio" name="op3" value="1">
    <label>(B) $num = $_POST[“txtnum2”];</label><br>
    <input type="radio" name="op3" value="0">
    <label>(C) $num = $_POST[“input”];</label><br>
    <input type="radio" name="op3" value="0">
    <label>(D) $num = $_POST[“label”];</label><br>
    <input type="radio" name="op3" value="0">
    <label>(E) $num = $POST[“txtnum2”];</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao2.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html>
