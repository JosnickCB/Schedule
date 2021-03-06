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
      <a class="nav-link" id="Profesores" href="adm_profesor.php">Profesores</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="Clases" href="adm_clases.php">Clases</a>
   </li>
   <li class="nav-item">
      <a class="nav-link" id="asg_p" href="adm_asg_prof.php">Asignar Cursos</a>
   </li>
   </ul>
</nav>
   
   <br>
   <h3>CURSOS SIN DOCENTE</h3>
   <table id = "customers" >
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