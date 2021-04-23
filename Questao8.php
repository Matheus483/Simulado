<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op7"])){
    $_SESSION["op7"] = $_POST["op7"];
}else{
    $_SESSION["op7"] = $_SESSION["op7"];
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
<h2>Questão 8</h2>
r
<p>Quando se trabalha com estrutura de repetição e executamos o programa e o mesmo<br>
    fica em execução por tempo indeterminado não retornando uma resposta, geralmente
    temos um erro de?</p>

<form action="Questao9.php" method="post">
    <input type="radio" name="op8" value="0">
    <label>(A) Loop de contador</label><br>
    <input type="radio" name="op8" value="0">
    <label>(B) Loop de variável</label><br>
    <input type="radio" name="op8" value="0">
    <label>(C) Contador sem incremento ou decremento</label><br>
    <input type="radio" name="op8" value="0">
    <label>(D) Roda sem fim</label><br>
    <input type="radio" name="op8" value="1">
    <label>(E) Loop infinito ou eterno</label><br><br><br>
    <button type="submit">Próxima</button>
</form>
<br>
<form action="Questao7.php">
    <button type="submit">Anterior</button>
</form>
</body>
</html>
