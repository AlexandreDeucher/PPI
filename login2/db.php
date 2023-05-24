<?php
    function conectaBD(){
        $con=new PDO("mysql:host=localhost:dbname=web","root","aluno");
        return $con;
    }
    function insereUsuario($nome,$email,$senha){
        $con=conectaBD();
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO usuario (nome,login,senha) VALUES (?,?,?)";
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$nome);
        $stm->bindParam(2,$email);
        $stm->bindParam(4,$senha);
        $stm->execute();
    }
    return $con->lastInsertId();

    function deletaUsuario(){
        $con=conectaBD();
        $sql="DELETE FROM usuario WHERE id=?";
    try {
        //code...
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->execute();
    } catch (PDOException $e) {
        echo 'Error' . $e->getMessage();
    }
    }function recuperaUsuario($id){
        $con=conectaBD();
        $sql="SELECT * FROM usuario WHERE id=?";
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->execute();
        $result=$stm->fetchALL(PDO::FETCH_ASSOC);
        return $result;
    }
    function recuperaAll(){
        $con=conectaBD();
        $sql="SELECT * FROM usuario";
        $stm=$con->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->execute();
        $result=$stm->fetchALL(PDO::FETCH_ASSOC);
        return $result;

    }

?>