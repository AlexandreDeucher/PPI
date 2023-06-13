<?php
include_once "db.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
        delet($id);
        header("location: user.php");
    } else {
        echo "<p>Utilize todos os campos do formulario por favor</p>";
    }
?>