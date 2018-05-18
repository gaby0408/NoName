<?php
		try {
			$conn = new PDO('sqlsrv:Server=MEX_ISCARRIL\SQLEXPRESS01;Database=Test','root','Pa$sw0rd');
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}	
		catch (PDOException $ex) {
			echo "Sucedio un problema al realizar la conexion !!";
			exit;
		}	
?>