<?php
session_start();
?>

<?php

    if($_SESSION["usuario"] != null && $_SESSION["pwd"] !=null){
        header('Location: welcome_usuario.php');
    }
?>

<!DOCTYPE html>
<html>

  <head>

    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="css/fondo.css">
    <link rel="stylesheet" href="css/btnAvisoAlerta.css">
    <link rel="stylesheet" href="css/navigation.css">
    
    
  </head>

  <body>
    <div class="nav nav-pills">
      <div class="container">
        <ul class="pull-left">
        </ul>
        <ul class="pull-right">
           <li class="active"><a href="#">Info </a></li>
          <li><a href="registro.php">Guia </a></li> 
        </ul>
      </div>
    </div>
    
    
    <div class="jumbotron">
      <div class="container">
        <h1>Sistema de Informacion</h1>
        <h2>colectores aguas lluvia</h2>
        <!--<p>Rent from people in over 34,000 cities and 192 countries.</p>
        <a href="#">Learn More</a>
        -->
        <div id="botones">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="btn">
                        <h3>Inicia Sesion</h3>
                        <form method="POST" action="verificar_usuario.php">
                            <ul>
                                <li><label for="usuario" >Usuario</label></li>
                                <li><input type= "textbox" value="" name= "usuario"/> </li>
                                <li><label for="pass" name="pwd" >Constrasenia</label></li>
                                <li><input type= "password" value="" name= "pwd"/></li>
                                <li><input type="submit" /></li> 
                            </ul>
                        </form>
                        <a href="registro.php">registro</a>
                        <a href=""></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div >
                    </div>
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
          
          <div class="col-md-4">
            <h3>Host</h3>
            <p>Renting out your unused space could pay your bills or fund your next vacation.</p>
            <p><a href="#">Learn more about hosting</a></p>
          </div>
          
          <div class="col-md-4">
            <h3>Trust and Safety</h3>
            <p>From Verified ID to our worldwide customer support team, we've got your back.</p>
            <p><a href="#">Learn about trust at Airbnb</a></p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>