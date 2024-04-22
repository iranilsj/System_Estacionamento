<?php  
include_once('01conexao.php');
/*  QUERY PARA PESQUISAR  E LISTAR 05CADASTROVEICULOS.PHP*/
if (!empty($_GET['search'])) {
    $data = $_GET['search'];
    $sql = "SELECT cadmensalista.id, cadmensalista.nome, cadmensalista.endereco, cadmensalista.cidade, cadmensalista.celular FROM  cadmensalista WHERE  id LIKE '%$data%' or nome  LIKE '%$data%' or endereco LIKE '%$data%' or cidade LIKE '%$data%' or celular LIKE '%data%' ORDER By id DESC";
} else {
    /* SELECT PARA LISTAR O RELATÓRO*/
    $sql = "SELECT id, nome, endereco, cidade, celular FROM cadmensalista  ORDER BY id DESC";
}
$result = $conexao->query($sql)
?>