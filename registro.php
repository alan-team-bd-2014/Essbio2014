
<!DOCTYPE html>  
    <head>  
        <title>Insert data to PostgreSQL with php - creating a simple web application</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
        <style>  
            li {  
                list-style: none;  
            }  
        </style>  
    </head>    
    <body>
        <div class="titulo">
            <h1>Sistema de Recolección de aguas lluvia</h1>
        </div>
        <h2>Registro</h2>  
        <ul>  
            <form name="registro" action="verificar_registro.php" method="POST" >  
                <li>Rut:</li><li><input type="text" name="rut" /></li>  
                <li>Nombre:</li><li><input type="text" name="nombre" /></li>  
                <li>Apellido:</li><li><input type="text" name="apellido" /></li>  
                <li>Email:</li><li><input type="text" name="email" /></li>  
                <li>Clave:</li><li><input type="text" name="clave" /></li>
                <li>Confirmar Clave:</li><li><input type="text" name="clave_confirm" /></li>
                <li>Calle:</li><li><input type="text" name="calle" /></li>
                <li>Numero Calle:</li><li><input type="text" name="num_calle" /></li>  
                <li>Codigo Admin:</li><li><input type="text" name="admin_cod" /></li>  
                
                <li><input type="submit" /></li>  
            </form>  
        </ul>
        <div class="imagenes">
            <img src="http://munilaja.cl/w/wp-content/uploads/2013/08/NOTICIA-CORTE-ESSBIO.jpg">
        </div>
    </body>  
 </html>   

