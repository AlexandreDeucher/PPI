<?php
    if(!$_POST['email'] || !$_POST['senha']){
        header('Location: login.php');
        exit;
    }
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //aqui teria acesso ao banco e verificaria se o usuario existe
    if($email == 'admin' && $senha == 'admin'){
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['txt'] = $txt;
        header('Location: home.php');
    }else{
        header('Location: login.php');
        exit;
    }
?>