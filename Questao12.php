<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op11"])){
    $_SESSION["op11"] = $_POST["op11"];
}else{
    $_SESSION["op11"] = $_SESSION["op11"];
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
<h2>Questão 12</h2>


<p>No programa abaixo qual o valor será exibido para a variável $total?</p>

<img src="Img/q12.PNG" width=400 height=200>

<form action="Questao13.php" method="post">
    <input type="radio" name="op12" value="0">
    <label>(A) 30</label><br>
    <input type="radio" name="op12" value="0">
    <label>(B) 45</label><br>
    <input type="radio" name="op12" value="1">
    <label>(C) 20</label><br>
    <input type="radio" name="op12" value="0">
    <label>(D) 25</label><br>
    <input type="radio" name="op12" value="0">
    <label>(E) 10</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao11.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html