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
            $sql2 = "SELECT NOMBRE_ALUMNO FROM ALUMNO WHERE BOLETA = :username2 AND CONTRASEÑA_ALUMNO = :password2";
            $stmt2 = $conn->prepare($sql2, array(PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL));
            $stmt2->execute(array(":username2" => $username, ":password2" => $password));
            $temp = $stmt2->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT);

            $message = $temp[0];
            
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