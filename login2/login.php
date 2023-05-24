<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .caixa{
            display: flex;
            border: 1px solid black;
            

        }

    </style>

</head>
<body>
    <form action="verifica_login.php" method="POST">Login
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">Senha</label>
        <input type="text" name="senha">
        <input type="submit" value="Enviar"> 
    </form>
</body>
</html>