<?php
header("Content-type:text/html; charset=utf8");
session_start();
if(isset($_POST["op4"])){
    $_SESSION["op4"] = $_POST["op4"];
}else{
    $_SESSION["op4"] = $_SESSION["op4"];
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
    <h2>Questão 5</h2>

    <p>Qual será o valor da variável $cont ao final da execução do código abaixo.</p>

    <img src="Img/q5.PNG" width=400 height=200>

    <form action="Questao6.php" method="post">
        <input type="radio" name="op5" value="0">
        <label>(A) 1</label><br>
        <input type="radio" name="op5" value="0">
        <label>(B) 11</label><br>
        <input type="radio" name="op5" value="1">
        <label>(C) 10</label><br>
        <input type="radio" name="op5" value="0">
        <label>(D) 12</label><br>
        <input type="radio" name="op5" value="0">
        <label>(E) 13</label><br><br><br>
        <button type="submit">Próxima</button>
    </form>
    <br>
    <form action="Questao4.php">
        <button type="submit">Anterior</button>
    </form>
    </body>
    </html>

