<?php
include_once('PHP/07config06frmrrltveiculos.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="https://icons.iconarchive.com/icons/cornmanthe3rd/metronome/256/System-settings-icon.png" type="image/x-icon">
	<title>Atualizar Veículo</title>
	<link rel="stylesheet" href="CSS/07frmrrltveiculos.css"> <!--PARA LINKAR O CSS DA PAGINA-->
</head>

<body>
	<div class="nome-sistema">
		<hr>
		<h2>-Sistema para Gerenciamento de estacionamento-</h2>
		<hr>
	</div>
	<br><a href="06rltVeiculos.php" class="botao"><button>Voltar</button></a>
	<div class="frm-clientes">
		<form method="POST" action="08config07updateveiculos.php">
			<fieldset>
				<legend><b>Atualizar Veículos</b></legend>
				<div class="input-marca">
					<input type="text" name="marca" id="marca" class="inputUser" required value="<?php echo $marca ?>">
					<label for="marca" class="labelInput">Marca</label><br><br>
				</div>
				<div class="input-modelo">
					<input type="text" name="modelo" id="modelo" class="inputUser" required value="<?php echo $modelo ?>">
					<label for="modelo" class="labelInput">Modelo</label><br><br>
				</div>
				<div class="input-placa">
					<input type="text" name="placa" id="placa" class="inputUser" maxlength="8" required value="<?php echo $placa ?>">
					<label for="placa" class="labelInput">Placa</label><br><br>
				</div>
				<div class="input-cor">
					<input type="text" name="cor" id="cor" class="inputUser" maxlength="8" required value="<?php echo $cor ?>">
					<label for="cor" class="labelInput">Cor</label><br><br>
				</div>
				
                <input type="hidden" name="id" value="<?php echo $id ?>">
               <input type="submit" value="Atualizar" name="update" id="update">
			</fieldset>
	</div>
	</form>
</body>

</html>