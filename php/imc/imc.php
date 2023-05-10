<?php
   if(!(isset($_GET["peso"]) && ($_GET["altura"]))){
    echo "<script> alert('informe o seu peso e altura');
    window.location.href='/';
    </script>";
    exit();
}else{
    $a=$_GET["peso"];
    $b=$_GET["altura"];
    
    function imc($peso, $altura){
     return $peso/($altura*$altura);
    }
    echo "O imc é ".imc($a,$b);
}

?>