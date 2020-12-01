<?php
    require_once('../models/SQLGlobal.php');
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        try{
            $datos = json_decode(file_get_contents("php://input"),true);
            $id_dni= $_POST ['id_dni'];
            $curso_id= $_POST ['curso_id'];
        
            $respuesta = SQLGlobal::cudFiltro(
                "INSERT 
                INTO relacion_usuarios_curso (id_dni,curso_id) 
                VALUES (?,?)",
                array($id_dni,$curso_id)
            );
           if($respuesta>0 ){
                echo "Se asignaron lo cursos satisfactoriamente";
                
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