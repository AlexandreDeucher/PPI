<?php
include_once "db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senhasLogin'])) {
        $id=$_POST['id'];
            $nome=$_POST['nome'];
                $email=$_POST['email'];
                    $senha=$_POST['senhasLogin'];
        atualizar($id,$nome,$email,$senha);
        header("Location: user.php");
    } else {
        echo "<script> alert(Utilize todos os campos do formulario por favor) </script>";
    }
}   else {
        echo "<script> alert(requisição invalida) </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include_once "db.php";
    $id = '';
    $nome = '';
    $email = '';
    $senha = '';
    if (isset($_GET['id'])) {
        $id=$_GET['id'];
        $user=recover($id);
            if (!empty($user)) {
            $nome = $user['nome'];
            $email = $user['login'];
            $senha = $user['senha'];
                echo " 
                <div class='page'>
                <form class='formCad' action='alterar.php' method='POST'>
                <h1>Alterando Cadastro</h1>
                <p>Informe seus respectivos dados</p>

                        <label for='nome'>Nome</label>
                        <input type='text' name='id' value='$id' readonly> 
                        <label for='nome'>Nome</label>
                        <input type='text' placeholder='Informe o seu Nome' autofocus='true' name='nome' class='text' value='$nome'><br>
                        <label for='email'>E-mail</label>
                        <input type='email' placeholder='Informe o seu Email' autofocus='true' name='email' class='text' value='$email'><br>
                        <label for='senhasLogin'>Senha</label>
                        <input type='senhasLogin' placeholder='Informe sua senha' name='senhasLogin' class='text' value='$senha'><br> 
                        <input type='submit' value='Confirmar' class='btn' formtarget='_blank' />

                    </form>
                    </div>";
                } else {
                    echo "<p>Não encontramos o seu usuario em nosso sistema</p>";
                }
            } else {
                echo "<p>O ID não foi devidamente fornecido</p>";
    }
?>
</body>
</html>