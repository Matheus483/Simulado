<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op8"])){
    $_SESSION["op8"] = $_POST["op8"];
}else{
    $_SESSION["op8"] = $_SESSION["op8"];
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
<h2>Questão 9</h2>

<img src="Img/q9.PNG" width=400 height=200>

<p>Analise a figura acima e responda as 4 próximas questões:</p>

<p>Determine o primeiro valor assumido pela variável $cont nesse código:</p>

<form action="Questao10.php" method="post">
    <input type="radio" name="op9" value="1">
    <label>(A) 1</label><br>
    <input type="radio" name="op9" value="0">
    <label>(B) 2</label><br>
    <input type="radio" name="op9" value="0">
    <label>(C) 9</label><br>
    <input type="radio" name="op9" value="0">
    <label>(D) 10</label><br>
    <input type="radio" name="op9" value="0">
    <label>(E) 8</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao8.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html>
