<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op10"])){
    $_SESSION["op10"] = $_POST["op10"];
}else{
    $_SESSION["op10"] = $_SESSION["op10"];
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
<h2>Questão 11</h2>


<p>Determine o último valor assumido pela variável $total no final programa:</p>

<form action="Questao12.php" method="post">
    <input type="radio" name="op11" value="0">
    <label>(A) 20</label><br>
    <input type="radio" name="op11" value="0">
    <label>(B) 22</label><br>
    <input type="radio" name="op11" value="0">
    <label>(C) 18</label><br>
    <input type="radio" name="op11" value="0">
    <label>(D) 26</label><br>
    <input type="radio" name="op11" value="1">
    <label>(E) 33</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao10.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html>