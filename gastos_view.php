<?php


	$con = mysql_connect("localhost","root","2112");
	
		if (! $con){
			die ("ERROR AL CONECTAR CON MYSQL: ".mysql_error());
		}
			$bd = mysql_select_db("gastos_casa2",$con);
			//para comprobar que no haya errores
				if(! $bd ){
					die ("ERROR AL CONECTAR CON LA BD: ".mysql_error());
				}
						$result = mysql_query("SELECT * FROM gastos",$con);
     							while ($campo = mysql_fetch_row($result)){
     								$fecha = explode("-",$campo[0]);//usamos explode para dividir fecha en un array con 3 elementos
     								echo "<table border='1' width='58%'' cellspacing='0' align='center'>","<tr>","<td width='20%'>"
     								.$fecha[2]."/".$fecha[1]."/".$fecha[0]."</td>","<td width='20%'>".$campo[1]
     								."</td>","<td width='20%'>".$campo[2]."</td>","<td width='20%'>".$campo[3]
     								."</td>","<td width='20%'>".$campo[4]."</td>","</tr>","</table>";
 
    								}
?>


