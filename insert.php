<?php
                	if($_SERVER['REQUEST_METHOD'] == 'POST'){
                		include 'validar.php';
                		
                		if(empty($msg)){
							//echo 'no hay errores';
							// dar de alta al fecha_gasto
							
							$link = mysqli_connect('127.0.0.1', 'root', '2112', 'gastos_casa2');

							
							$fecha = explode("-",$_POST['fecha_gasto']);
							
							$sql = 'INSERT INTO gastos(fecha_gasto, tipo_gasto, detalle_gasto, cantidad_gasto, tipo_pago)'
												. ' VALUES("'.$fecha[2]."-".$fecha[1]."-".$fecha[0].'","'.$tipo_gasto.'", '
												. '"'.$detalle_gasto.'", '
												. '"'.$cantidad_gasto.'", '
												. '"'.$tipo_pago.'");';

							$rs = mysqli_query($link, $sql);

							if(mysqli_affected_rows($link) > 0){
								
								header('Location: index.php');
								

										$fecha_gasto = "";
										$tipo_gasto = "";										
										$detalle_gasto = "";
										$cantidad_gasto = "";										
										$tipo_pago = "";
										

									}
									}else{
								echo 'Se produjo un error al intentar cargar el gasto.';

								}
							}//mysqli_close($link);

                ?>