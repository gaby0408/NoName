<?php
		try {
			$conn = new PDO('sqlsrv:Server=OSKR;Database=ESCA','sa','root');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $ex) {
			echo "Sucedio un problema al realizar la conexion !!";
			exit;
		}	
?>