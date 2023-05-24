<?php
    include_once "db.php";

    if(conectaBD()){
        echo "sucesso";
       echo insereUsuario("Enzo","enzo@enzo","123456");
       echo "<br><PRE>";
       
       var_dump(recuperaAll);
        echo "<PRE>";
    }else {
        echo "falhou miseravelmente";
    }
  
?>