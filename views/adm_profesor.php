<!DOCTYPE html>
<html lang='ES'>
<head>
<meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
   <style>
   #customers {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
   }
   #customers td, #customers th {
   border: 1px solid #ddd;
   padding: 8px;
   }
   #customers tr:nth-child(even){background-color: #f2f2f2;}
   #customers tr:hover {background-color: #ddd;}
   #customers th {
   padding-top: 12px;
   padding-bottom: 12px;
   text-align: left;
   background-color: #343a40;
   color: white;
   }
   </style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <ul class="navbar-nav">
   <li class="nav-item">
      <a class="nav-link" id="Cerrar Sesión" href="../index.php">Cerrar Sesión</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="Home" href="admin.php">Inicio</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="Profesores" href="#">Profesores</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="Clases" href="adm_clases.php">Clases</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="asg_p" href="adm_asg_prof.php">Asignar Cursos</a>
   </li>
   </ul>
</nav>

<table id = "customers">
   <tr>
      <th>Profesor</th>
      <th>Número de Horas</th>
   </tr>
   <?php
      $cadena="host='ec2-107-22-241-205.compute-1.amazonaws.com'
      port=''
      dbname='d9als99827c31n' 
      user='gpqwpiiktacwxs' 
      password='538976debbd8d639330ebbe6ab93d11c4d7dbab4478b4d3461d9cb13a79c7420'";
      $con = pg_connect($cadena) or die ("Error conexion.".pg_last_error());
      $res1 = pg_query("select * from usuarios where tipo_usuarios <> 2");
      while($row = pg_fetch_row($res1)){
         echo "<tr>";
         echo "<td>";
         echo $row[1];
         echo "</td>";
         echo "<td>";
         echo substr(pg_fetch_row(pg_query("select * from get_horas(".$row[0].");"))[2],0,2);
         echo "</td>";
         echo "</tr>";
      }
      /*print_r();
      print_r(pg_fetch_row($res1));*/
   ?>
</table>
   

</body>
</html>