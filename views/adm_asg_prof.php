<!DOCTYPE html>
<html lang='ES'>
<head>
    <title>Asignación</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> 
    <title>Profesor</title>
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      margin: 15px 0;
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input:hover, select:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
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
    <div class="testbox">
      <form action="admin.php">
        <h1>Asignación de profesores a cursos</h1>
        <div id="curse" class="item">
          <p>Curso</p>
          <select>
            <option value="">*Seleccione Curso*</option>
            <option value="A">Ingenieria de Software II</option>
            <option value="B">Estructura de Datos Avanzada</option>
            <option value="C">Sistemas Operativos</option>
            <option value="D">Matemática Aplicada a la Computación</option>
            <option value="E">Programación Competitiva</option>
          </select>
        </div>
        <div class="item">
          <p>Dia</p>
          <select>
            <option value="">*Seleccione Dia*</option>
            <option value="A">Lunes</option>
            <option value="B">Martes</option>
            <option value="C">Miercoles</option>
            <option value="D">Jueves</option>
            <option value="E">Viernes</option>
          </select>
        </div>
        <div class="item">
          <p>Clase</p>
          <select>
            <option value="">*Aula*</option>
            <option value="A">301</option>
            <option value="B">302</option>
            <option value="C">303</option>
            <option value="D">305</option>
            <option value="E">205</option>
          </select>
        </div>
        <div class="item">
          <p>Hora Entrada</p>
          <select>
            <option value="">*Hora*</option>
            <option value="A">7.00 a.m</option>
            <option value="B">8.50 a.m</option>
            <option value="C">10.40 a.m</option>
            <option value="D">12.20 p.m</option>
            <option value="F">2.00 p.m</option>
            <option value="G">3.50 p.m</option>
            <option value="H">5.40 p.m</option>
            <option value="I">7.20 p.m</option>
          </select>
        </div>
        <div class="item">
          <p>Hora Salida</p>
          <select>
            <option value="">*Hora*</option>
            <option value="A">7.50 a.m</option>
            <option value="B">9.40 a.m</option>
            <option value="C">11.30 a.m</option>
            <option value="D">13.10 p.m</option>
            <option value="F">2.50 p.m</option>
            <option value="G">4.30 p.m</option>
            <option value="H">6.30 p.m</option>
            <option value="I">8.10 p.m</option>
          </select>
        </div>
        <div class="item">
          <p>Código/DNI Profesor</p>
          <div>
            <input type="text" name="name" placeholder="Código/DNI" />
          </div>
        </div>
        <div class="item">
          <p>Correo</p>
          <input type="text" name="name"/>
        </div>
        <div class="btn-block">
          <button type="submit" href="/">Completar</button>
        </div>
      </form>
    </div>
  </body>
</html>