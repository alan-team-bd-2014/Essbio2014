<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel='stylesheet' href='style.css'/>
        <script src='script.js'></script>
    </head>
    <body>
       <div>
                <div>
                    <h1>SUMIDEROS</h1>
                </div>
            </div>
        <?php

        $dbconn = pg_connect("host=plop.inf.udec.cl port=5432 dbname=BDI-g user=BDI-7 password=bdi7")
        or die('No se ha podido conectar: ' );
    

        $query = "  SELECT se.num_sector, si.num_sistema, su.id_sumidero
                    FROM essbio.sector se, essbio.sistema si, essbio.sumidero su
                    WHERE si.num_sector = se.num_sector AND su.num_sistema = si.num_sistema";

        $result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
        $num= pg_num_rows($result);
            
        echo "<table>\n";
        while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
            echo "\t<tr>\n";
            foreach ($line as $col_value) {
                echo "\t\t<td>$col_value</td>\n";
            }
            echo "\t</tr>\n";
        }
        echo "</table>\n";

        ?>

        <div class="imagenes">
            <img src="http://munilaja.cl/w/wp-content/uploads/2013/08/NOTICIA-CORTE-ESSBIO.jpg">
        </div>
        
        

    </body>
</html>