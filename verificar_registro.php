<?php
// Start the session
session_start();
?>

<?php
// Set session variables
$_SESSION["usuario"] = $_POST["usuario"];
$_SESSION["pwd"] = $_POST["pwd"];
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
        <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
        <link rel="stylesheet" href="css/fondo.css">
        <link rel="stylesheet" href="css/btnStatic.css">
        <link rel="stylesheet" href="css/navigation.css">
        <title></title>
    </head>
    <body>
        <div class="nav nav-pills">
            <div class="container">
                <ul class="pull-left">
                    <li class="active"><a href="bajo-construccion.html">Info </a></li>
                    <!--<li><a href="#">Mapa </a></li>-->
                </ul>
                <ul class="pull-right">
                    <li><a href="login.php">Login </a></li> 
                    <li><a href="bajo-construccion.html">Guia </a></li> 
                </ul>
            </div>
        </div>
        <div class="jumbotron">
            <div class="container">

                <?php
                $rut = $_POST["rut"];
                $nombre = $_POST["nombre"];
                $apellido = $_POST["apellido"];
                $email = $_POST["email"];
                $clave = $_POST["clave"];
                $clave_confirm = $_POST["clave_confirm"];
                $calle = $_POST["calle"];
                $num_calle = $_POST["num_calle"];
                $admin_cod = $_POST["admin_cod"];
                $id_sumidero = 1101;


                $dbconn = pg_connect("host=plop.inf.udec.cl port=5432 dbname=BDI-g user=BDI-7 password=bdi7")
                        or die('No se ha podido conectar: ');

                if ($clave == $clave_confirm) {

                    $query = "INSERT INTO essbio.ciudadano VALUES ($rut, '$nombre', '$apellido', '$email', $clave, 20179503, '$calle',$admin_cod, 155)";

                    $result = pg_query($query) or die("
                            <h1>Registro fallido!</h1>
                            <h2>intente nuevamente</h2>
                            ");
                }


                echo "
                            <h1>Bienvenido a Essbio!</h1>
                            <h2>Juntos seremos mejores ciudadanos</h2>
                            
                            <a href='login.php'>Inicie sesion y comience a ser mejor ciudadano!</a>
                            ";
                ?>
                <div id='botones'>
                    <div class='container'>
                        <div class='row'>
                            <div class='col-md-4'>

                                <div class='col-md-4'>

                                </div>
                                <div class='col-md-4'>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="learn-more">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <h3><a href="https://www.essbio.cl/hogar/hogar.php">Essbio</a></h3>
                            <p>Pagina Principal.</p>

                        </div >

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
