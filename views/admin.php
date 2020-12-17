<!DOCTYPE html>
<html lang='ES'>
<head>
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <ul class="navbar-nav">
   <li class="nav-item">
      <a class="nav-link" id="Cerrar Sesión" href="../index.php">Cerrar Sesión</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="Profesores" href="adm_profesor.php">Profesores</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="Clases" href="adm_clases">Clases</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="asg_p" href="adm_asg_prof.php">Asignar Cursos</a>
   </li>
   </ul>
</nav>
   
   <br>
   <h3>CURSOS SIN DOCENTE</h3>
   <!--?php
      $cadena="host='ec2-107-22-241-205.compute-1.amazonaws.com'
      port=''
      dbname='d9als99827c31n' 
      user='gpqwpiiktacwxs' 
      password='538976debbd8d639330ebbe6ab93d11c4d7dbab4478b4d3461d9cb13a79c7420'";
      $con = pg_connect($cadena) or die ("Error conexion.".pg_last_error());
      $res1 = pg_query("select ");
   ?-->
   <table align="center" , style="width : 50%" border="1px" >
      <tr>
         <th>Nombre</th>
         <th>Total de horas</th>
      </tr>
      <tr>
         <td>Programación Competitiva II</td>
         <td>8 horas</td>
      </tr>
      <tr>
         <td>Tópicos en Análisis de Algoritmos</td>
         <td>6 horas</td>
      </tr>
      <tr>
         <td>Compiladores II</td>
         <td>4 horas</td>
      </tr>
      <tr>
         <td>Bid Data</td>
         <td>6 horas</td>
      </tr>
   </table>
</body>
</html>