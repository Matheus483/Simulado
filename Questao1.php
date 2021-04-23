<?php
header("Content-type:text/html; charset=utf8");
if(isset($_POST["nome"]) && !empty($_POST["nome"]) &&
   isset($_POST["email"]) && !empty($_POST["email"])){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
}else{
    echo "<script>
                alert('Nome ou Matrícula não informados');
                window.location.href = 'Index.html'; //redirecionando para a pagina de produtos
            </script>";
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
<h2>Questão 1</h2>

<p>Na programação quando precisamos que um trecho de código repita utilizamos
    estruturas de repetição, quais dentre os comandos abaixo são estrutura de repetição:</p>

<form action="Questao2.php" method="post">
    <input type="radio" name="op1" value="0">
    <label>(A) For, IF, Case</label><br>
    <input type="radio" name="op1" value="0">
    <label>(B) IF, Case, Do While</label><br>
    <input type="radio" name="op1" value="1">
    <label>(C) Do While, While, For</label><br>
    <input type="radio" name="op1" value="0">
    <label>(D) Do While, IF, Else</label><br>
    <input type="radio" name="op1" value="0">
    <label>(E) While, Case, IF</label><br><br><br>
    <button type="submit" name="Enviar">Próxima</button>
</form>

</body>
</html>