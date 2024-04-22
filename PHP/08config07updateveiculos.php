<?php
include_once('01conexao.php');

if (isset($_POST['update'])) {

$marca = $_POSTa['Marca'];
$modelo = $_POST['Modelo'];
$placa = $_POST['Placa'];
$cor = $_POST['Cor'];

$sqlAtualiza = "UPDATE cadveiculos SET Marca='$marca', Modelo='$modelo', Placa='$placa', Cor='$cor' WHERE id='$id' ";

$result = $conexao->query($sqlAtualiza);
}
 // faltou finalizar