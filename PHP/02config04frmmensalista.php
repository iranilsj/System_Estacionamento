<?php
include_once('01conexao.php');
//   SALVAR CADASTRO DO USUARIO  04FRMMENSALISTA.HTML
if (isset($_POST['salvarmensalista'])) {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data = $_POST['data_nas'];
    $celular = $_POST['celular'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    // query para inserir novo cadastro 04frmmensalista.html
    $result = mysqli_query($conexao, "INSERT INTO cadmensalista(nome, data_nascimento, cpf, rg, cep, endereco, numeroEnd, complementoEnd, bairro, cidade, ufEstado, celular) 
	VALUES ('$nome', '$data', '$cpf', '$rg', '$cep', '$endereco', '$numero', '$complemento', '$bairro', '$cidade', '$estado', '$celular')");
}
