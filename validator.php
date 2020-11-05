<!DOCTYPE html>
<html lang=''>
<head>
</head>
<body>
<?php
    $user = $_POST['uname'];
    $pwd = $_POST['psw'];
    if ($user == 'teacher') {
        if($pwd == 'artificios'){
            echo "<meta http-equiv='refresh' content='0;url=teacher.php'/>";     
        }
        else{
            echo "Contraseña Incorrecta<br>";
            echo "Espere un momento<br>";
            echo "<meta http-equiv='refresh' content='3;url=login.php' />"; 
        }
    }else{
        echo "Usuario Incorrecto<br>";
        echo "Espere un momento<br>";
        echo "<meta http-equiv='refresh' content='3;url=login.php' />"; 
    }
?>

</body>
<html>