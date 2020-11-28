<!DOCTYPE html>
<html lang=''>
<head>
</head>
<body>
<?php
    session_start();
    $cadena="host='ec2-107-22-241-205.compute-1.amazonaws.com'
    port=''
    dbname='d9als99827c31n' 
    user='gpqwpiiktacwxs' 
    password='538976debbd8d639330ebbe6ab93d11c4d7dbab4478b4d3461d9cb13a79c7420'";
    $con=pg_connect($cadena) or die ("Error conexion.".pg_last_error());
    $user = $_POST['uname'];
    $pwd = $_POST['psw'];
    echo $user;
    $r = pg_query($con,"SELECT * FROM usuarios WHERE correo = '".$user."'");
    if(!$r){
        echo "<h1>Usuario o contraseña inválido</h1>";
        echo "<meta http-equiv='refresh' content='10;url=login.php'/>";
    }
    $rt = pg_fetch_row($r);
    if($pwd == $rt[4]){
        if($rt[2]==1){
            echo "<meta http-equiv='refresh' content='0;url=profesor.php'/>";
            $_SESSION['dni'] = $rt[0];
        }else if($rt[2]==2){
            echo "<meta http-equiv='refresh' content='0;url=createcurso.html'/>";
            $_SESSION['dni'] = $rt[0];
        }else{
            echo "Error inesperado";
            echo "<meta http-equiv='refresh' content='10;url=index.php'/>";
        }
    }else{
        echo "<h1>Usuario o contraseña inválido</h1>";
        echo "<meta http-equiv='refresh' content='10;url=login.php'/>";
    }
?>

</body>
<html>