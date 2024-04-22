<?php  
include_once('01conexao.php');

/*    QUERY PARA MOSTRAR AS INFORMACOES NOS CAMPO DE EDITAR CADASTRO */
if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM cadmensalista WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    if ($result->num_rows > 0) {

        while ($user_data = mysqli_fetch_assoc($result)) {

            $nome = $user_data['nome'];
            $cpf = $user_data['cpf'];
            $rg = $user_data['rg'];
            $data = $user_data['data_nascimento'];
            $celular = $user_data['celular'];
            $cep = $user_data['cep'];
            $endereco = $user_data['endereco'];
            $numero = $user_data['numeroEnd'];
            $complemento = $user_data['complementoEnd'];
            $bairro = $user_data['bairro'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['ufEstado'];
        }
    }
}

 // ATUALIZAR CADASTRO DO USUARIO  05FRMRLTMENSSALISTA.PHP
 if (isset($_POST['update'])) {
    $id  = $_POST['id'];
    $nome = $_POST['nome'];
    $data = $_POST['data_nas'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numeroEnd = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $celular = $_POST['celular'];
    // query para atualizar no banco de dados 05frmmensalista.php
    $sqlAtualiza = "UPDATE cadmensalista SET nome='$nome', data_nascimento='$data', cpf='$cpf', rg='$rg', cep='$cep', endereco='$endereco', numeroEnd='$numeroEnd', complementoEnd='$complemento', bairro='$bairro', cidade='$cidade', ufEstado='$estado', celular='$celular' WHERE id='$id' ";

    $result = $conexao->query($sqlAtualiza);
}