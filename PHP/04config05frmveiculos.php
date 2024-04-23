<?php  
include_once('01conexao.php');
//   SALVAR CADASTRO DO VEICULO 05FRMVEICULOS.HTML
if (isset($_POST['salvarveiculos'])) {
    // inserir informacoes no input do formulário  05frmveiculos.html
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $placa = $_POST['placa'];
    $cor = $_POST['cor'];
    //  quero para inserir no banco de dados 05vrmveiculos.html
    $result = mysqli_query($conexao, "INSERT INTO cadveiculos(cadmensalista_id, Marca, Modelo, Placa, Cor) 
VALUES ('$id', '$marca', '$modelo', '$placa', '$cor')");
}


