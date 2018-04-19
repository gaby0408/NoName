<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<title>Olvidé mi contraseña</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    
    <script>
	
		function Validar(){
				
				document.contrasenia.action="enviarEmail.php";
				if(document.contrasenia.email.value==""){
						
						alert("Debes ingresar el correo electrónico.");
						document.contrasenia.email.focus();
						return;
					}
					
					document.contrasenia.email.value="Registrar";
					document.contrasenia.submit();
				
			}
		
	</script>
    
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" id="logo"><img src="images/logoESCA.png" alt="Logo"></a>
				<ul id="navigation">
					<li>
						<a href="index.html">Inicio</a>
					</li>
					<li>
						<a href="registro.html">Registro</a>
					</li>
					<li>
						<a href="signin.html">Iniciar sesión</a>
					</li>
					<li>
						<a href="acerca.html">Acerca</a>
					</li>
				</ul>
			</div>
			<span class="shadow"></span>
		</div>
		<div id="contents">
			<div id="olvide contraseña">
				<form name="contrasenia" action="" method="post">
					<br></br>
					<br></br>
					<h2></h2>
					<label>Correo electronico: </label>
					<input type="email" name="email" class="campos">
					<br></br>
					<!--<input type="Submit" value="Enviar Contraseña" class="btn">-->
                    <input name="boton" type="button" value="Enviar Contraseña" class="boton" onClick="javascript:Validar();">
					<br></br>
					<br></br>
					<br></br>
					<br></br>
                    <input type="hidden" name="proceso">
				</form>
			</div>
		</div>
		<div id="footer">
			<span class="shadow"></span>
			<div>
				<div class="section">
					<h5>Menú de navegación</h5>
					<ul class="navigation">
						<li>
							<a href="index.html">Inicio</a>
						</li>
						<li>
							<a href="registro.html">Registro</a>
						</li>
						<li>
							<a href="signin.html">Iniciar sesión</a>
						</li>
						<li>
							<a href="acerca.html">Acerca</a>
						</li>
					</ul>
				</div>
				<div class="section">
					<h5>Horas de atención</h5>
					<ul>
						<li>
							Lunes a Viernes: 7am a 1pm
						</li>
                        <li>
							Lunes a Viernes: 3pm a 10pm
						</li>
						<li>
							Sábados: ???
						</li>
						<li>
							Domingos: ???
						</li>
					</ul>
				</div>
				<div class="section">
					<h5>Redes Sociales</h5>
					<ul class="connect">
						<li>
							<a href="#">Facebook</a>
						</li>
						<li>
							<a href="#">Twitter</a>
						</li>				
					</ul>
				</div>
			</div>
		</div>
	</div>
</body>
</html>