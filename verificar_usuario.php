
<!DOCTYPE html>
<html>
    <head>
        <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
        <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
        <link rel="stylesheet" href="css/fondo.css">
        <link rel="stylesheet" href="css/btnAvisoAlerta.css">
        <link rel="stylesheet" href="css/navigation.css">
        <title></title>
    </head>
    <body>
        <div class="nav nav-pills">
            <div class="container">
                <ul class="pull-left">
                </ul>
                <ul class="pull-right">
                    <li><a href="welcome_usuario.php">Home</a></li>
                    <li class="active"><a href="bajo-construccion.html">Info </a></li>
                </ul>
            </div>
        </div>
        <div class="jumbotron">
            <div class="container">

                <?php
                $usuario = $_POST["usuario"];
                $contra = $_POST["pwd"];

                if (is_numeric($contra)) {

                    $dbconn = pg_connect("host=plop.inf.udec.cl port=5432 dbname=BDI-g user=BDI-7 password=bdi7")
                            or die('No se ha podido conectar: ');


                    $query = "SELECT c.nombre, c.clave, c.admin_code FROM Essbio.ciudadano as c WHERE nombre='$usuario' AND clave='$contra'";
                    $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
                    $num = pg_num_rows($result);
                    $row = pg_fetch_row($result);
                    echo($row[2]);

                    if ($num > 0) {


                        echo "
                            <h1>Inicio de sesion satisfactoria!</h1>
                            <h2>bienvendio a essbio!</h2>
                            ";
                        
                        // Start the session
                        session_start();
                        

                        
                        // Set session variables
                        $_SESSION["usuario"] = $_POST["usuario"];
                        $_SESSION["pwd"] = $_POST["pwd"];
                        

                ;
                } else {
                echo"<h1>Inicio de sesion erronea!</h1>
                <h2>clave o usuario incorrecto!</h2>
                ";


                //header('Location: index.html');
                }
                } else {

                echo"<h1>Inicio de sesion erronea!</h1>
                <h2>clave o usuario incorrecto!</h2>
                ";
                }
                ?>

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

    </body>
</html>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />





