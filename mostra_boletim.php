<!DOCTYPE html>
<html>
<?php
	include "include/db.php";
	include "include/topo.php";
	$id = $_GET["numero_bo"];
	$estado = "SP"
?>
<body>
	<div id="wrap">
		<?php include "include/menu.php"; ?>
		<!-- FORM PARA CADASTRO BO -->
		<div id="form_acidente" class="formularios">
		  	<h1>Ver Detalhes</h1>
		    <table border="0" cellspacing="0" cellpadding="0">
		      <tr>
		        <td>
		            <input name="rua" type="text " id="rua" placeholder="Rua" disabled>
		            <input name="numero" type="text " id="numero" placeholder="Número" disabled>
		            <input name="bairro" type="text " id="bairro" placeholder="Bairro" disabled>
		            <input name="complemento" type="text " id="complemento" placeholder="Complemento" disabled>
		            <select name="estado" disabled>
		            	<option value=""><?php echo $estado; ?></option>
		            </select>
		            <a href="index.php"><button name="voltar" id="voltar">Voltar</button></a>
		        </td>
		      </tr>
		</div>
		<!-- FORM PARA CADASTRO -->

	</div>
</body>
</html>