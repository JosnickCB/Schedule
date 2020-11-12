<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor</title>
</head>
<body>
    <p>hola</p>
    <table style="width:100%" border="1">
    <?php
        require 'SQLGlobal.php';

        $cadena="host='ec2-107-22-241-205.compute-1.amazonaws.com'
        port=''
        dbname='d9als99827c31n' 
        user='gpqwpiiktacwxs' 
        password='538976debbd8d639330ebbe6ab93d11c4d7dbab4478b4d3461d9cb13a79c7420'";
        $con=pg_connect($cadena) or die ("Error conexion.".pg_last_error());

        $result = pg_query("select get_data(161616)");
        $result2= pg_query("SELECT u.nombre, r.usu_dni,c.nombre,r.curso_id from relacion_usuario_curso r
        inner join usuario u on u.dni=161616 and r.usu_dni=161616
            inner join curso c on c.id_curso=r.curso_id and c.hora_entrada=hora_entrada and c.hora_salida=hora_salida");
        
        $result3= pg_query("select *from curso");
        $row = pg_fetch_result($result,0,0);
        $rowi = explode(',',$row);
        echo $rowi[0]."</br>";
        echo $rowi[1]."</br>"; 
        echo $rowi[2]."</br>"; 
        echo $rowi[3]."</br>"; 

        $row = pg_fetch_result($result,1,0);
        $rowi = explode(',',$row);
        echo $rowi[0]."</br>";
        echo $rowi[1]."</br>"; 
        echo $rowi[2]."</br>"; 
        echo $rowi[3]."</br>";

        $row = pg_fetch_result($result,2,0);
        $rowi = explode(',',$row);
        echo $rowi[0]."</br>";
        echo $rowi[1]."</br>"; 
        echo $rowi[2]."</br>"; 
        echo $rowi[3]."</br>"; 
        $row = pg_fetch_result($result,3,0);
        $rowi = explode(',',$row);
        echo $rowi[0]."</br>";
        echo $rowi[1]."</br>"; 
        echo $rowi[2]."</br>"; 
        echo $rowi[3]."</br>"; 


        while($row = pg_fetch_row($result3,null,PGSQL_ASSOC)) {
            echo "<li><strong>"
                    ." id curso : ".$row['id_curso']
                    ." nombre : ".$row['nombre']
                    ." ngrupo: ".$row['ngrupo']
                    ." hora salidad : ".$row['hora_entrda']
                    ." hora salida : ".$row['hora_salida']."</strong></li>";
                    echo "<br />\n";
        }
    ?>
    </table>
</body>
</html>
