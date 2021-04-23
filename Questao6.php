<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op5"])){
    $_SESSION["op5"] = $_POST["op5"];
}else{
    $_SESSION["op5"] = $_SESSION["op5"];
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
<h2>Questão 6</h2>

<p>Para que o comando While repita uma certa quantidade de vezes e não fique em um loop<br>
    infinito, devemos utilizar uma variável de controle está variável deve ser de qbual tipo:</p>

<form action="Questao7.php" method="post">
    <input type="radio" name="op6" value="0">
    <label>(A) String</label><br>
    <input type="radio" name="op6" value="0">
    <label>(B) Char</label><br>
    <input type="radio" name="op6" value="1">
    <label>(C) Int</label><br>
    <input type="radio" name="op6" value="0">
    <label>(D) Boolean</label><br>
    <input type="radio" name="op6" value="0">
    <label>(E) Contadores</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao5.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html>

