<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	<title>Inicio Profesor</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" id="logo"><img src="images/logo.png" alt="Logo" height=60></a>
                <span id="school">ESCA TEPEPAN</span>
				<ul id="navigation">
					<li>
						<a href="index.html">Inicio</a>
					</li>
					<li>
						<a href="registro.html">Registro</a>
					</li>
					<li class="selected">
						<a href="inicioprf.php">Profesor</a>
					</li>
					<li>
						<a href="acerca.html">Acerca</a>
					</li>
				</ul>
			</div>
			<span class="shadow"></span>
		</div>
		<div id="contents">
            <div id="body">
                <div id="leftpane">
                    <div>
                        <h3>Cursos</h3>
						<ul>
                            <li><a href="dmerca.html" target="iframe_a">Derecho mercantil</a></li>
                            <li><a href="error.html" target="iframe_a">Operaciones de Comercio Exterior</a></li>
							<li><a href="error.html" target="iframe_a">Análisis de Mercados Internacionales</a></li>
                        </ul>
                    </div>
                    <hr>
                    <div>
                        <h3>Noticias</h3>
                        <ul>
                            <li>Esta es una noticia</li>
							<li>Ya sirve el sistema</li>
                        </ul>
                    </div>
				</div>
				<div id="middlepane">
					<h2>Bienvenido Profesor "nombre"</h2>
                    <input type="button" value="<< Volver" onclick="window.history.back();">&emsp;&emsp;&emsp;&emsp;&emsp;
                    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                    <input type="button" value="Crear Actividad / Subir Archivo" onclick="change_src()">
                    <script>
                        function change_src() {
                            var myFrame = document.getElementById("iframe_a");
                            myFrame.src = "subirarch.html";
                            }
                    </script>
					<iframe src="blank.html" id="iframe_a" name="iframe_a" height="450px" width="499px"></iframe>
				</div>
                <div id="rightpane">
					<h3>Calendario de Actividades</h3>
					<p>Aquí debería de verse un calendario</p>
                    <hr>
					<h3>Repositorio</h3>
					<?php
					$directorio = 'guardar/';
         				if($dir = opendir($directorio)){
             				while($archivo = readdir($dir)){
                 				if($archivo != '.' && $archivo != '..'){
									$ruta_archivo = $directorio.$archivo;
                     				echo "<a href='$ruta_archivo'>$archivo</a><br/>";
                 				}
             				}
         				}
					?>				
				</div>
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
							<a href="inicioprf.php">Profesor</a>
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
