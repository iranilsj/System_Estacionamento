<?php
include_once('PHP/06config06rltVeiculos.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://icons.iconarchive.com/icons/cornmanthe3rd/metronome/256/System-settings-icon.png" type="image/x-icon">
    <title>Relatório de Usuário</title>
    <link rel="stylesheet" href="CSS/05cadastroVeiculos.css"> <!--PARA LINKAR O CSS DA PAGINA-->
</head>

<body>

    <div class="nome-sistema">
        <hr>
        <h2>-Sistema para Gerenciamento de estacionamento-</h2>
        <hr>
    </div>
    <a href="02menu.html" class="botao"><button class="btn btn-success">Voltar</button></a>
    <div class="box-search">
        <input type="search" class="from-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-sucess">
            <svg xmlns='http://www.w3.org/2000/svg' width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
            </svg>
        </button>
    </div>
        <div class="tbl-usuarios">
            <table class="table text-white table-bg">
                <table class="tbl-veiculos">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Placa</th>
                            <th scope="col">Cor</th>
                            <th scope="col">Editar Veículo</th>
                            <th scope="col">Apagar Veículo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($user_data = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $user_data['id'] . "</td>";
                            echo "<td>" . $user_data['Marca'] . "</td>";
                            echo "<td>" . $user_data['Modelo'] . "</td>";
                            echo "<td>" . $user_data['Placa'] . "</td>";
                            echo "<td>" . $user_data['Cor'] . "</td>";
                            echo "<td>
                            <a class='btn btn-primary' href='06frmrrltveiculos.php?id=$user_data[id]'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                             <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z'/>
                            </svg>
                            </a>
                        </td>";
                            echo "<td>
                        <a class='btn btn-danger' href='PHP/09config06rltVeiculosDelete.php?id=$user_data[id]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                            <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'/>
                        </svg>
                        </a>
                    </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
        </div>
</body>
<script>
    //SCRIPT PARA PESQUISAR INFORMACOES
    var search = document.getElementById('pesquisar');
    /* PARA USAR CLICK DO MOUSE*/
    function searchData() {
        window.location = '06rltVeiculos.php?search=' + search.value;
    }
    /* PARA USAR TECLA ENTER */
    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }
    });

</script>

</html>