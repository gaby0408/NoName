<?php
	include("conexion.php");

    $username=$_POST["username"];
    $password=$_POST["password"];
    try{
        $sql = "SELECT COUNT(*) FROM ALUMNO WHERE NOMBRE_ALUMNO = :username AND CONTRASEÑA_ALUMNO = :password";
        $stmt = $conn->prepare($sql);
        if($stmt->execute(array(":username" => $username, ":password" => $passwords)))
        {
          $message = 1;
          echo $message;
        } 
    }catch (PDOException $ex) 
    {
        $message = 2;
        echo $message;
        $conn = null;
        exit;
    }
    $conn = null;
?>