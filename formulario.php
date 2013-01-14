<?php


echo date("d-m-y");
//$fecha_gasto = (date("d-m-y")); 







?>

<form name="f1" method="POST" action="insert.php" enctype="multipart/form-data" onsubmit="return validar();">
	<table>

		<tr>
			<td colspan="4"><h2>Ingresar gastos al Sistema</h2></td>
		</tr>


		<tr>
			<td>Fecha del Gasto (dd-mm-aaaa)</td>
			<td><input type="text" name="fecha_gasto"></td>

		</tr>


		<tr>

			<td rowspan="2">
				<fieldset>
					<legend>Tipo de Gasto</legend>
					<input type="radio" name="tipo_gasto" value="fijo" <?php if($tipo == "fijo"){echo 'checked="checked"';} ?>>Fijo<br>
					<input type="radio" name="tipo_gasto" value="comlim" <?php if($tipo == "comlim"){echo 'checked="checked"';} ?>>Comida y Limpieza<br>
					<input type="radio" name="tipo_gasto" value="variable" <?php if($tipo == "variable"){echo 'checked="checked"';} ?>>Variable<br>
					<input type="radio" name="tipo_gasto" value="mantenimiento" <?php if($tipo == "mantenimiento"){echo 'checked="checked"';} ?>>Mantenimiento<br>
					<input type="radio" name="tipo_gasto" value="mejoras" <?php if($tipo == "mejoras"){echo 'checked="checked"';} ?>>Mejoras<br>
					



				</fieldset>
			</td>
			<td>Detalle del Gasto</td>
			<td><input type="text" name="detalle_gasto" size="50"maxlength="290" value="<?php echo $detalle_gasto; ?>"></td>

		</tr>

		<tr>
			<td>Cantidad del Gasto $ </td>
			<td><input type="text" name="cantidad_gasto" size="10"maxlength="20" value="<?php echo $cantidad_gasto; ?>"></td>
		</tr>

		<tr>
		  <td colspan="4"><hr /></td>
		</tr>	
		<tr>

			<td rowspan="2">
				<fieldset>
					<legend>Tipo de Pago</legend>
					<input type="radio" name="tipo_pago" value="efectivo" <?php if($tipo == "efectivo"){echo 'checked="checked"';} ?>>Efectivo<br>
					<input type="radio" name="tipo_pago" value="tarjeta" <?php if($tipo == "tarjeta"){echo 'checked="checked"';} ?>>Tarjeta<br>
					<input type="radio" name="tipo_pago" value="cuotastarjeta" <?php if($tipo == "cuotastarjeta"){echo 'checked="checked"';} ?>>Cuotas con Tarjeta<br>
					

				</fieldset>
			</td>
			

		</tr>

		<tr>
			<td></td>
			<td> <input type="submit" value="Enviar Datos" name="seleccion"></td>
			<td> <input type="reset" value="Borrar Datos" name="seleccion"></td>
			<td></td>
		</tr>
		
	</table>
