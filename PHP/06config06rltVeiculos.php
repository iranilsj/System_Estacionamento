<?php  
include_once('01conexao.php');
/*  QUERY PARA PESQUISAR  E LISTAR 05CADASTROVEICULOS.PHP*/
if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT cadveiculos.id, cadveiculos.Marca, cadveiculos.Modelo, cadveiculos.Placa, cadveiculos.Cor FROM  cadveiculos WHERE id LIKE '%$data%' or Marca LIKE '%$data%' or Modelo  LIKE '%$data%' or Placa LIKE '%$data%' or Cor LIKE '%$data%' ORDER By id DESC";
    /* PARA LISTAR RELATORIO DE VEICULOS */
} else {
    $sql = "SELECT cadveiculos.id, cadmensalista.nome, cadveiculos.Marca, cadveiculos.Modelo, cadveiculos.Placa, cadveiculos.Cor FROM cadmensalista 
    INNER JOIN cadveiculos ON cadmensalista.id = cadveiculos.cadmensalista_id ORDER BY cadmensalista.id DESC";
}
$result = $conexao->query($sql)
?>