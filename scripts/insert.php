<?php
	include("conexion.php");
	$boleta=$_POST["Boleta"];
	$nombre=$_POST["Nombre"];
	$correo=$_POST["correo"];
	$pass=$_POST["pass"];
	$cve_carrera=$_POST["cve_carrera"];
	$plan=$_POST["plan"];
	$tutor=$_POST["tutor"];
	 try{
		  $sql = "INSERT INTO Alumno VALUES (:boleta, :nombre, :tutor, :correo, :cve_carrera, :plan, :pass)";
		  $stmt = $conn->prepare($sql);
		  if($stmt->execute(array(":boleta" => $boleta, ":nombre" => $nombre, ":tutor" => $tutor, ":correo" => $correo, ":cve_carrera" => $cve_carrera, ":plan" => $plan, ":pass" => $pass)))
		  {
			$message = 1;
			echo $message;
		  } 
		}
	 catch (PDOException $ex) 
		{
			$message = 1;
			echo $message;
			$conn = null;
			exit;
		}
	$conn = null;
?>  