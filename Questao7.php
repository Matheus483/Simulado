<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op6"])){
    $_SESSION["op6"] = $_POST["op6"];
}else{
    $_SESSION["op6"] = $_SESSION["op6"];
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
<h2>Questão 7</h2>

<p>Qual será o valor da variável $total ao final da execução do código abaixo.</p>

<img src="Img/q7.PNG" width=400 height=200>

<form action="Questao8.php" method="post">
    <input type="radio" name="op7" value="0">
    <label>(A) 6</label><br>
    <input type="radio" name="op7" value="0">
    <label>(B) 9</label><br>
    <input type="radio" name="op7" value="1">
    <label>(C) 10</label><br>
    <input type="radio" name="op7" value="0">
    <label>(D) 15</label><br>
    <input type="radio" name="op7" value="0">
    <label>(E) 21</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao6.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html>
