<?php
include_once('PHP/05config05frmrltmensalista.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://icons.iconarchive.com/icons/cornmanthe3rd/metronome/256/System-settings-icon.png" type="image/x-icon">
    <title>Atualizar Cadastro</title>
    <link rel="stylesheet" href="CSS/06frmrltmensalista.css"> <!--PARA LINKAR O CSS DA PAGINA-->

</head>

<body><div class="nome-sistema">
        <hr>
        <h2>-Sistema para Gerenciamento de estacionamento-</h2>
        <hr>
    </div>
    <br><a href="05cadastrarVeiculos.php" class="botao"><button>Voltar</button></a>
    <div class="frm-clientes">
        <form action="PHP/05config05frmrltmensalista.php" method="POST">
            <fieldset>
                <legend><b>ATUALIZAR CADASTRO</b></legend>
                <br>
                <div class="input-nome">
                    <input type="text" name="nome" id="nome" class="inputUser" required value="<?php echo $nome ?>">
                    <label for="nome" class="labelInput">Nome Completo</label><br><br>
                </div>
                <div class="input-cpf">
                    <input type="text" name="cpf" id="cpf" class="inputUser" maxlength="14" class="inputUser" required value="<?php echo $cpf ?>">
                    <label for="cpf" class="labelInput">CPF</label><br><br>
                </div>
                <div class="input-rg">
                    <input type="text" name="rg" id="rg" class="inputUser" required value="<?php echo $rg ?>" >
                    <label for="rg" class="labelInput">RG</label><br><br>
                </div>
                <div class="input-celular">
                    <input type="text" name="celular" id="celular" class="inputUser" required value="<?php echo $celular ?>">
                    <label for="celular" class="labelInput">Celular</label><br><br>
                </div>
                <center>Data Nascimento</center><br><input type="date" name="data_nas" id="data_nas" class="inputUser" value="<?php echo $data ?>"><br><br>
                <div class="input-cep">
                    <input type="text" name="cep" id="cep" class="inputUser" required value="<?php echo $cep ?>">
                    <label for="cep" class="labelInput">CEP</label><br><br>
                </div>
                <div class="input-end">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required value="<?php echo $endereco ?>">
                    <label for="endereco" class="labelInput">Endereço</label><br><br>
                </div>
                <div class="input-num">
                    <input type="number" name="numero" id="numero" class="inputUser" required value="<?php echo $numero ?>">
                    <label for="numero" class="labelInput">Número</label><br><br>
                </div>
                <div class="input-complemento">
                    <input type="text" name="complemento" id="complemento" class="inputUser" value="<?php echo $complemento ?>">
                    <label for="complemento" class="labelInput">Complemento</label><br><br>
                </div>
                <div class="input-bairro">
                    <input type="text" name="bairro" id="bairro" class="inputUser" required value="<?php echo $bairro ?>">
                    <label for="bairro" class="labelInput">Bairro</label><br><br>
                </div>
                <div class="input-cidade">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required value="<?php echo $cidade ?>">
                    <label for="cidade" class="labelInput">Cidade</label><br><br>
                </div>
                <div class="input-estado">
                    <input type="text" name="estado" id="estado" class="inputUser" required value="<?php echo $estado ?>">
                    <label for="estado" class="labelInput">Estado</label><br><br>
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
               <input type="submit" value="Atualizar Cadastro" class="btn btn-success" onclick="alert('Cadastro Atualizado com Sucesso')" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>

</html>