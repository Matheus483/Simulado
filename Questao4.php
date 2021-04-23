<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op3"])){
    $_SESSION["op3"] = $_POST["op3"];
}else{
    $_SESSION["op3"] = $_SESSION["op3"];
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
<h2>Questão 4</h2>

<p>Quando trabalhamos com estrutura de repetição devemos realizar uma tarefa para<br>
    que o código repita até um determinado momento, qual tarefa seria está:</p>

<form action="Questao5.php" method="post">
    <input type="radio" name="op4" value="0">
    <label>(A) Testar a condição se for verdadeira</label><br>
    <input type="radio" name="op4" value="0">
    <label>(B) Testar a condição se for falsa</label><br>
    <input type="radio" name="op4" value="1">
    <label>(C) Atualizar o contador</label><br>
    <input type="radio" name="op4" value="0">
    <label>(D) Validar a condição antes da execução</label><br>
    <input type="radio" name="op4" value="0">
    <label>(E) Validar a condição após a execução</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao3.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html>
