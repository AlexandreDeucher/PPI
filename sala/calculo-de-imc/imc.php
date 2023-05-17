<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <label for="">informe seu nome</label>
        <input type="text" name="nome">
        <label for="">informe seu email</label>
        <input type="text" name="email">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
<?php

    function calcImc($pesos,$alturas){
        return $pesos/($alturas*$alturas);
    }
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    echo(calcImc($altura,$peso));
?>