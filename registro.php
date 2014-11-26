<!DOCTYPE html>
<html>

  <head>

    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="css/fondo.css">
    <link rel="stylesheet" href="css/btnStatic.css">
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
        <h1>Registro</h1>
        <!--<p>Rent from people in over 34,000 cities and 192 countries.</p>
        <a href="#">Learn More</a>
        -->
        <div id="botones">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div >
                     
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="btn">
                      <form name="registro" action="verificar/verificar_registro.php" method="POST" >  
                          <li>Rut:</li><li><input ng-change="" type="text" name="rut" /></li>  
                <li>Nombre:</li><li><input type="text" name="nombre" /></li>  
                <li>Apellido:</li><li><input type="text" name="apellido" /></li>  
                <li>Email:</li><li><input type="text" name="email" /></li>  
                <li>Clave:</li><li><input type="text" name="clave" /></li>
                <li>Confirmar Clave:</li><li><input type="text" name="clave_confirm" /></li>
                <li>Calle:</li><li><input type="text" name="calle" /></li>
                <li>Numero Calle:</li><li><input type="text" name="num_calle" /></li>  
                <li>Codigo Admin:</li><li><input   value="0000" type="text" name="admin_cod" /></li>  
                
                <li><input type="submit" /></li>  
            </form> 
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