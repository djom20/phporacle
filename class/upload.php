<?php
	if(isset($_POST['cedula'])){
		if(isset($_POST['nombre'])){
			if(isset($_POST['apellido'])){
				if(isset($_POST['correo'])){
					if(isset($_POST['ubicacion'])){
						if(isset($_POST['area'])){
							if(isset($_POST['ticket'])){
								if ($_FILES['archivo']["error"] > 0){
									echo "Error: " . $_FILES['archivo']['error'] . "<br>";
								}else{
									copy($_FILES['archivo']['tmp_name'],'../upload/'.$_FILES['archivo']['name']);
								}

								include('conexion.php');
								$sql='INSERT INTO `incidencias`(`cedula`, `nombre`, `apellido`, `correo`, `ubicacion`, `area`, `ticket`, `archivo`) VALUES ("'.$_POST['cedula'].'","'.$_POST['nombre'].'","'.$_POST['apellido'].'","'.$_POST['correo'].'","'.$_POST['ubicacion'].'","'.$_POST['area'].'","'.$_POST['ticket'].'","'.$_FILES['archivo']['name'].'")';
								$result=mysql_query($sql,$link) or die("Error: ".mysql_error().'<br>'.$sql);
								if(mysql_num_rows($result)>0){
									echo 'Se ha almacenado su incidencia correctamente.';
								}
								header('location: ../');
							}else{
								echo 'No se recibio el ticket';
							}
						}else{
							echo 'No se recibio el area';
						}
					}else{
						echo 'No se recibio la ubicacion';
					}
				}else{
					echo 'No se recibio el correo';
				}
			}else{
				echo 'No se recibio el apellido';
			}
		}else{
			echo 'No se recibio el nombre';
		}
	}else{
		echo 'No se recibio la cedula';
	}
?>