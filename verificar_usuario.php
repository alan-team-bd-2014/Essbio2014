<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

function verificarUsuario(){
    if(isset($usuario)){
        
    }
}


$usuario = $_POST["usuario"];
$contra =$_POST["pass"];

if(is_numeric ($contra )){

	$dbconn = pg_connect("host=plop.inf.udec.cl port=5432 dbname=BDI-g user=BDI-7 password=bdi7")
        or die('No se ha podido conectar: ' );
	

	$query = "SELECT * FROM Essbio.ciudadano WHERE nombre='$usuario' AND clave='$contra'";
			$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
	$num= pg_num_rows($result);
	
        $adminCode = "SELECT * FROM Essbio.ciudadano WHERE nombre='$usuario' AND clave='$contra'";
	
        if($adminCode!= null){
          header('Location: welcome_admin.php');  
        }else{
            header('Location: welcome_usuario.php');
        }
	if($num >0){
	echo "Bienvenido $usuario";}
	else 
		echo "usuario y/o contraseña incorrecta";
	
}else{ 
    echo "La contraseña sólo puede contener números";
    header('Location: index.php');
}
?>
