<?php  
  
    $rut = $_POST["rut"];
    $nombre =$_POST["nombre"];
    $apellido =$_POST["apellido"];
    $email =$_POST["email"];
    $clave =$_POST["clave"];
    $clave_confirm =$_POST["clave_confirm"];
    $calle =$_POST["calle"];
    $num_calle =$_POST["num_calle"];
    $admin_cod =$_POST["admin_cod"];
    $id_sumidero= 1101;
    
    
    $dbconn = pg_connect("host=plop.inf.udec.cl port=5432 dbname=BDI-g user=BDI-7 password=bdi7")
    or die('No se ha podido conectar: ' );  

    if( $clave == $clave_confirm){

        $query = "INSERT INTO essbio.ciudadano VALUES ($rut, '$nombre', '$apellido', '$email', $clave, 20179503, '$calle',$admin_cod, 155)";
  
        $result = pg_query($query) or die('El registro fallo: ' . pg_last_error());   
      
    }
    
    header('Location: index.html');
    
?>
