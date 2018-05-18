<?php
header("Location: http://localhost/ESCA/inicioalumno.php");
    $formatos = array('.pdf', '.docx', '.doc', 'xlsx');
    
    if(isset($_POST['boton'])){
        $nombreArchivo = $_FILES['archivo']['name'];
        $nombreTmpArchivo = $_FILES['archivo']['tmp_name'];
        $ext = substr($nombreArchivo, strrpos($nombreArchivo, '.'));

        if(in_array($ext, $formatos)){
            if(move_uploaded_file($nombreTmpArchivo, "guardar/$nombreArchivo")){
                echo "Archivo Subido";
            }else{
                echo "Ocurrio un problema";
            }
        }else{
            echo "Archivo no permitido";
        }
    }
?>