<?php

if (!empty($_GET['id'])) {
    include_once('01conexao.php');


    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM cadveiculos WHERE id = $id";

    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {

        $sqlDelete =  "DELETE FROM cadveiculos WHERE id=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}else {header('location: 06rltVeiculos.php');}

?>
