<?php   
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if($email == "admin" && $senha == "123456") {
        echo "Login efetuado com sucesso!";
        session_start();
        $_SESSION['login'] = $email;
        echo "<script>setTimeout( function(){window.location.href='home.php'}   );
        </script>";
    }else{
        echo "Login ou senha invalido";
    }
?>