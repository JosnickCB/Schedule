
<?php 
    require '../models/SQLGlobal.php';
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        try{
            $datos = json_decode(file_get_contents("php://input"),true);
            $id_curso= $_POST ['id_curso'];
            $nombre= $_POST ['nombre'];
            $ngrupo= $_POST ['ngrupo'];
            $hora_entrada= $_POST ['hora_entrada'];
            $hora_salida= $_POST ['hora_salida'];
        
            $respuesta = SQLGlobal::cudFiltro(
                "INSERT 
                INTO curso(id_curso,nombre,
                ngrupo,hora_entrada,hora_salida) 
                VALUES (?,?,?,?,?)",
                array($id_curso,$nombre,$ngrupo,$hora_entrada,$hora_salida)
            );

            if($respuesta>0 )
            {
                echo "Done";
                echo "<br/>";
                $cadena="host='ec2-107-22-241-205.compute-1.amazonaws.com'
                port=''
                dbname='d9als99827c31n' 
                user='gpqwpiiktacwxs' 
                password='538976debbd8d639330ebbe6ab93d11c4d7dbab4478b4d3461d9cb13a79c7420'";
                $con=pg_connect($cadena) or die ("Error conexion.".pg_last_error());

                $result = pg_query("SELECT id_curso,nombre,
                ngrupo,hora_entrada,hora_salida FROM curso");
                if (!$result) {
                    echo "Ocurrió un error.\n";
                    exit;
                }
                echo "<table border='1' cellspacing='0' cellpadding='0' width='200' align='center'>";
                while ($row = pg_fetch_row($result,null,PGSQL_ASSOC)) {
                    echo "<tr>";
                    /*echo "<li><strong>"
                    ." id curso : ".$row['id_curso']
                    ." nombre : ".$row['nombre']
                    ." ngrupo: ".$row['ngrupo']
                    ." hora entrada : ".$row['hora_entrada']
                    ." hora salidad : ".$row['hora_salida']."</strong></li>";
                    echo "<br />\n";*/
                    //for($i = 0;$i<3;$i++){
                        echo "<td>".$row['nombre']."</td>";
                        echo "<td>".$row['hora_entrada']."</td>";
                        echo "<td>".$row['hora_salida']."</td>";
                    //}
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo json_encode(array(
                    'respuesta' => '200',
                    'estado' => 'no se obtuvieron los datos correctamente',
                    'data' => $respuesta,
                    'error' => ''
                ));
            }


        }catch(PDOException $e){
            echo json_encode(
                array(
                    'respuesta' => '-1',
                    'estado' => 'ocurrio un error',
                    'data' => '',
                    'error' => $e->getMessage())
            );
        }
    }
?>
<br>
<a href="../index.php"><button> Home </button></a>