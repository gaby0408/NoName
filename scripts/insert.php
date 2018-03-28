<?php
	include("conexion.php");
	$boleta=$_POST["Boleta"];
	$nombre=$_POST["Nombre"];
	$dire=$_POST["Dire"];
	$tel=$_POST["Tel"];
	$status=$_POST["status"];
	$prom=$_POST["prom"];
	$correo=$_POST["correo"];
	$pass=$_POST["pass"];
	$cve_carrera=$_POST["cve_carrera"];
	$plan=$_POST["plan"];
	$tutor=$_POST["tutor"];
	 try{
		  $sql = "INSERT INTO Alumno VALUES (:boleta, :nombre, :dire, :status, :tutor, :tel, :prom, :correo, :cve_carrera, :plan, :pass)";
		  $stmt = $conn->prepare($sql);
		  if($stmt->execute(array(":boleta" => $boleta, ":nombre" => $nombre, ":dire" => $dire, ":status" => $status, ":tutor" => $tutor, ":tel" => $tel, ":prom" => $prom, ":correo" => $correo, ":cve_carrera" => $cve_carrera, ":plan" => $plan, ":pass" => $pass)))
		  {
			$message = 1;
			echo $message;
		  } 
		}
	 catch (PDOException $ex) 
		{
			$message = 2;
			echo $message;
			exit;
		}
	$conn = null;
?>  