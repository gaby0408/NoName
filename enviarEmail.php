<?php

//Creación de conexión a BD
$enlaces = mysql_connect("localhost", "root", "root");
//Selección de la BD a la que deseamos conectarnos
mysql_select_db("NoName", $enlaces);

?>

<?php
	
	$proceso = $_POST['proceso'];
	
	if($proceso=="Registrar"){
		
		$email = $_POST['email'];
		
		//Realizamos la consulta
		$consultaUsuario = "SELECT * FROM dbo.Alumno WHERE EMAIL_ALUMNO='$email'";
		$resultadoUsuario = mysql_query($consultaUsuario);
		
		$filaUsuario = mysql_fetch_array($resultadoUsuario);
		$xNombre 		= $filaUsuario['NOMBRE_ALUMNO'];
		$xEmail 		= $filaUsuario['EMAIL_ALUMNO'];
		$xContrasenia 		= $filaUsuario['CONTRASEÑA_ALUMNO'];
		
		/*Envíando datos al E-mail*/
		$emailDestino = "jaguar_azul619@hotmail.com";
		$encabezado = "Envío de datos";
		$mensaje .= "Estos son tus datos de la cuenta: \n";
		$mensaje .= "-------------------------------------\n";
		$mensaje .= "Nombre del alumno: ".$xNombre."\n";
		$mensaje .= "Correo electrónico del alumno: ".$xContrasenia."\n";
		
		$headers = 'From: '.$emailDestino."\r\n".
'Reply-To:'.$emailDestino."\r\n".
'X-Mailer: PHP/'.phpversion();
		mail($emailDestino, $encabezado, $mensaje, $headers);
		
		
			
			echo "<script type='text/javascript'>
			window.location ='index.html'
		</script>";
	}else{
		
		echo "<script type='text/javascript'>
			window.location ='signin.html'
		</script>";
		
	}
?>