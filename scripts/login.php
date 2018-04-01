<?php
	include("conexion.php");

    $username=$_POST["username"];
    $password=$_POST["password"];
    try{
        $sql = "SELECT COUNT(*) FROM ALUMNO WHERE BOLETA = :username AND CONTRASEÑA_ALUMNO = :password";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array(":username" => $username, ":password" => $password));
        $temp = $stmt->fetchColumn(0);
        if($temp > 0){
          $message = 1;
          echo $message;
        }else{
            $message = 2;
            echo $message;
        } 

    }catch (PDOException $ex) 
    {
        $message = $ex;
        echo $message;
        $conn = null;
        exit;
    }
    $conn = null;
?>