<?php
  include_once "db.php";//tem que mudar o nome daqui 
  $nome = $_POST['nome'];
  $login = $_POST['email'];
  $senha = $_POST['senhasLogin'];
  $vemCad = $_POST['isBoolean'];
  if (conexaoBD()) {
    echo insert($nome, $login, $senha);
      if($vemCad != 1){
        header('Location: index.html');
      }else{
        header('Location: cadastro.html');
      }
  }    else {
        echo "Erro ao conectar";
}
?>