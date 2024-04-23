
<?php 
include_once('01conexao.php');

/*    QUERY PARA MOSTRAR AS INFORMACOES NOS CAMPO DE EDITAR CADASTRO */
if (!empty($_GET['id'])) 
{

    $id = $_GET['id'];
    $sqlSelect = "SELECT * FROM cadveiculos WHERE id=$id";
    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {

        while ($user_data = mysqli_fetch_assoc($result)) {

            $marca = $user_data['Marca'];
            $modelo = $user_data['Modelo'];
            $placa = $user_data['Placa'];
            $cor = $user_data['Cor'];
            
        }
    } 
} 
 // ATUALIZAR CADASTRO DOveiculo  
if (isset($_POST['update'])) {
    
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $cor = $_POST['cor'];
    // query para atualizar no banco de dados 05frmmensalista.php
    $sqlAtualiza = "UPDATE cadveiculos SET Marca='$marca', Modelo='$modelo', Placa='$placa', Cor='$cor' WHERE id='$id' ";
   
    $result = $conexao->query($sqlAtualiza);
   
} 




























