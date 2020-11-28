<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesor</title>
</head>
<body>
    <button onclick="location.href='index.php'" type="button">Cerrar Sesión</button>
    
    <?php
        session_start();
        error_reporting(E_ERROR | E_PARSE);
        $cadena="host='ec2-107-22-241-205.compute-1.amazonaws.com'
        port=''
        dbname='d9als99827c31n' 
        user='gpqwpiiktacwxs' 
        password='538976debbd8d639330ebbe6ab93d11c4d7dbab4478b4d3461d9cb13a79c7420'";
        $con=pg_connect($cadena) or die ("Error conexion.".pg_last_error());
        
        //echo $_SESSION['dni']; 
        echo '<table style="width:100%" border="1" >';
        $r1 = pg_query("select get_data2(".$_SESSION['dni'].")");
        if(!$r1){
            echo "Usted no tiene horarios disponibles";
        }
        $i = 0;
        $row = pg_fetch_result($r1,$i,0);
        $rowi = explode(',',$row);
        echo "<td align='center' colspan = '6'><h2>".str_replace('"','',(str_replace("(","",$rowi[0])))."</h2></td>";
        $r2 = pg_query("select hora");
        $r1 = pg_query("select get_data2(".$_SESSION['dni'].")");
        while($row = pg_fetch_result($r1,$i,0)){
            echo "<tr>";
            $rowi = explode(',',$row);
            echo "<th>".str_replace('(','',(str_replace('"','',$rowi[0])))."</th>";
            echo "<th>".$rowi[1]."</th>";
            echo "<th>".$rowi[2]."</th>";
            echo "<th>".$rowi[3]."</th>";
            echo "<th>".$rowi[4]."</th>";
            echo "<th>".str_replace(')','',(str_replace('"','',$rowi[5])))."</th>";
            echo "</tr>";
            $i++;
        }
    ?>
    </table>
</body>
</html>
