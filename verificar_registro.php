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
    $direccion = $calle . " " . $num_calle;

    /*
    EL SISTEMA DEBE CONFIRMAR LOS VALORES:
    POR CONFIRMAR: 
        contrastar con los rut de la base de datos
        admin_cod para ver si el usuario nuevo es un administrador
        la calle es importantisima de chekear, porque debera contrastarla con las calles de los sumideros,
        en caso de hacer match con alguno se le asigna ese id_sumidero al usuario

    */
    $dbconn = pg_connect("host=plop.inf.udec.cl port=5432 dbname=BDI-g user=BDI-7 password=bdi7")
    or die('No se ha podido conectar: ' );  

    if( $clave == $clave_confirm){

        $query = "INSERT INTO essbio.ciudadano VALUES ($rut, '$nombre', '$apellido', '$email', $clave, $id_sumidero, '$calle', $admin_cod, $calle)";
  
        $result = pg_query($query) or die('El registro fallo: ' . pg_last_error());   
      
    }
    
?>
<?php
function validaRut($rut){
    if(strpos($rut,"-")==false){
        $RUT[0] = substr($rut, 0, -1);
        $RUT[1] = substr($rut, -1);
    }else{
        $RUT = explode("-", trim($rut));
    }
    $elRut = str_replace(".", "", trim($RUT[0]));
    $factor = 2;
    for($i = strlen($elRut)-1; $i >= 0; $i--):
        $factor = $factor > 7 ? 2 : $factor;
        $suma += $elRut{$i}*$factor++;
    endfor;
    $resto = $suma % 11;
    $dv = 11 - $resto;
    if($dv == 11){
        $dv=0;
    }else if($dv == 10){
        $dv="k";
    }else{
        $dv=$dv;
    }
   if($dv == trim(strtolower($RUT[1]))){
       return true;
   }else{
       return false;
   }
}
?>