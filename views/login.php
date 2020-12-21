<!DOCTYPE html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <title>Login</title>
</head>
<body>

<form action="./controllers/validator.php" method="post">
  <div class="container">
    <label for="uname"><b>Usuario</b></label>
    <input type="text" placeholder="Ingrese Usuario" name="uname" required>

    <label for="psw"><b>Contraseña</b></label>
    <input type="password" placeholder="Ingrese Contraseña" name="psw" required>

    <button type="submit">Ingresar</button>
    <br>
    <br>
    <button type="button" onclick ="location.href='../index.php'">Cancelar</button>
  </div>
  <br>
  <img src = "pabellonCS.png" width="1350" height="575">
</form>
</body>
<html>