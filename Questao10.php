<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op9"])){
    $_SESSION["op9"] = $_POST["op9"];
}else{
    $_SESSION["op9"] = $_SESSION["op9"];
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
<h2>Questão 10</h2>


<p>Determine o último valor assumido de $cont:</p>

<form action="Questao11.php" method="post">
    <input type="radio" name="op10" value="0">
    <label>(A) 1</label><br>
    <input type="radio" name="op10" value="0">
    <label>(B) 2</label><br>
    <input type="radio" name="op10" value="0">
    <label>(C) 7</label><br>
    <input type="radio" name="op10" value="1">
    <label>(D) 8</label><br>
    <input type="radio" name="op10" value="0">
    <label>(E) 9</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao9.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html>
