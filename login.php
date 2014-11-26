<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
    <head>
        <link rel='stylesheet' href='login.css'/>
        <script src='script.js'></script> 
    </head>
    <body>
        <div class="titulo">
            <h1>Sistema de Recolección de aguas lluvia</h1>
        </div>
        <div class="imagenes">
            <img src="http://munilaja.cl/w/wp-content/uploads/2013/08/NOTICIA-CORTE-ESSBIO.jpg">
        </div>
        <div class="login">
			
            <form method= "POST" action = "verificar_usuario.php">
			<b>Usuario: </b> <br/><input type= "textbox" value="" name= "usuario"/> <br/>
			<b>Contraseña: </b> <br/><input type= "password" value="" name= "pwd"/> <br/>
			<input type= "submit" value ="Iniciar Sesión" />
			<a href="welcome.php">
				<div>
					<h5>Entrar</5>
                </div>
			</a>
			<a href="registro.php">
				<div>
                    <h5>Registrar</5>
                </div>
            </a>
        </div>
        <div class="boton">
            
        </div>

    </body>
</html>