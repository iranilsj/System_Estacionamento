<?php 
include_once('PHP/03config05cadastrarVeiculos.php');
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
            <thead>
                <tr>
                    <th scope="col">Código</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cadastrar Veículo</th>
                    <th scope="col">Editar Dados Pessoais</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($user_data = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $user_data['id'] . "</td>";
                    echo "<td>" . $user_data['nome'] . "</td>";
            
                    echo "<td>
                    <a class='btn btn-danger' href='05frmveiculos.html?id=$user_data[id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-car-front-fill' viewBox='0 0 16 16'>
                    <path d='M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z'/>
                  </svg>
                  </a>
                  </td>";
                  echo "<td>
                   
                  <a class='btn btn-primary' href='05frmrltmensalista.php?id=$user_data[id]'>
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                  <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                  <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
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
    var search = document.getElementById('pesquisar');
    /* PARA USAR CLICK DO MOUSE*/
    function searchData() {
        window.location = '05cadastrarVeiculos.php?search=' + search.value;
    }
    /* PARA USAR TECLA ENTER */
    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") {
            searchData();
        }
    });
</script>

</html>