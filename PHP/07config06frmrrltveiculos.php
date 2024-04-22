
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
























