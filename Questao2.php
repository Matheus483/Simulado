<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op1"])){
    $_SESSION["op1"] = $_POST["op1"];
}else{
    $_SESSION["op1"] = $_SESSION["op1"];
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
<h2>Questão 2</h2>

<p>Quando queremos recuperar o valor de um objeto HTML no PHP, qual atributo guarda
    esse nome:</p>

    <img src="Img/q2.PNG">

<form action="Questao3.php" method="post">
    <input type="radio" name="op2" value="1">
    <label>(A) name</label><br>
    <input type="radio" name="op2" value="0">
    <label>(B) class</label><br>
    <input type="radio" name="op2" value="0">
    <label>(C) required</label><br>
    <input type="radio" name="op2" value="0">
    <label>(D) value</label><br>
    <input type="radio" name="op2" value="0">
    <label>(E) option</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao1.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html>
