<?php
	if (isset($_SESSION["k_user_id"]) /*&& $_SESSION["k_role"] == "estudiante"*/) {
	echo '
	<table>
		<tr>
			<td id="boton">
				<a id="estudiante_inicio" href ="#">
				&nbsp;&nbsp;Inicio
				</a>
			</td>
		</tr>
		<tr>
			<td id="boton">
				<a id="estudiante_jornada" href ="#">
				&nbsp;&nbsp;A&ntilde;adir Jornada
				</a>
			</td>
		</tr>
		<tr>
			<td id="boton">
				<a id="estudiante_bitacora" href ="#">
				&nbsp;&nbsp;Bit&aacute;cora
				</a>
			</td>
		</tr>
		<tr>
			<td id="boton">
				<a id="estudiante_informe" href ="#">
				&nbsp;&nbsp;Informe
				</a>
			</td>
		</tr>
		<tr>
			<td id="boton">
				<a id="estudiante_asistencia" href ="#">
				&nbsp;&nbsp;Hojas Asistencia
				</a>
			</td>
		</tr>
		<tr>
			<td id="boton">
			<a href="acciones/cerrar_sesion.php">
				&nbsp;&nbsp;Cerrar Sesi&oacute;n
			</a>
			</td>
		</tr>
		
		
	</table>
';
}
?>
