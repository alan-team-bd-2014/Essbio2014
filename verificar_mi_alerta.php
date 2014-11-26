<?php
// Start the session
session_start();
?>
<?php

function randIdMensaje(){
    	$id = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    	return $id;
    }

    $tipoProblema = $_POST["problema"];
    $descripcion = $_POST["comment"];
    $id_mensaje = rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
    $fechaActual = date("Y/m/d");
    date_default_timezone_set("America/Santiago");
    $horaActual = date("h:i:sa");;
    
    $usuario = $_SESSION["usuario"];
    $contra =$_SESSION["pwd"];
    echo "variables";
    $dbconn = pg_connect("host=plop.inf.udec.cl port=5432 dbname=BDI-g user=BDI-7 password=bdi7")
    or die('No se ha podido conectar: ' );  
    
    $query1 = "SELECT * FROM essbio.ciudadano as c WHERE nombre='$usuario' AND clave='$contra'";
    $result1 = pg_query($query1) or die('El registro fallo: ' . pg_last_error());   
    $datosUsuario = pg_fetch_row($result1);
    echo "datosUsuario";
    
    $query = "INSERT INTO essbio.alerta VALUES ($id_mensaje, '$tipoProblema',0,'$descripcion',NOW(),NOW(),$datosUsuario[5],$datosUsuario[0])";
    $result = pg_query($query) or die('El registro fallo: ' . pg_last_error());
    echo "Insert Alerta";
    
  
?>