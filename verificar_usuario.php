<?php
// Start the session
session_start();
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
// Set session variables
$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["pwd"] = $_POST["pwd"];
echo "Session variables are set.";
?>
    
<?php


$usuario = $_POST["usuario"];
$contra =$_POST["pwd"];

if(is_numeric ($contra )){

$dbconn = pg_connect("host=plop.inf.udec.cl port=5432 dbname=BDI-g user=BDI-7 password=bdi7")
    or die('No se ha podido conectar: ' );
	

	$query = "SELECT * FROM Essbio.ciudadano WHERE nombre='$usuario' AND clave='$contra'";
			$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
	$num= pg_num_rows($result);
			
	
	if($num >0){
        echo "Bienvenido $usuario"; header('Location: welcome_usuario.php');}
	else {
                header('Location: index.html');
		echo "usuario y/o contraseña incorrecta";
	
        }
            
	}
	else{
            header('Location: index.html');
            echo "La contraseña sólo puede contener números";
        }
?>

