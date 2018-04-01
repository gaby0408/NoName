<?php
	include("conexion.php");

    $username=$_POST["username"];
    $password=$_POST["password"];
    try{
        $sql = "SELECT COUNT(*) FROM ALUMNO WHERE NOMBRE_ALUMNO = :username AND CONTRASEÑA_ALUMNO = :password";
        $stmt = $conn->prepare($sql);
        if($stmt->execute(array(":boleta" => $boleta, ":nombre" => $nombre, ":dire" => $dire, ":status" => $status, ":tutor" => $tutor, ":tel" => $tel, ":prom" => $prom, ":correo" => $correo, ":cve_carrera" => $cve_carrera, ":plan" => $plan, ":pass" => $pass)))
        {
          $message = 1;
          echo $message;
        } 
    }catch (PDOException $ex) 
    {
        $message = 2;
        echo $message;
        exit;
    }
    $conn = null;
?>