<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignar Curso</title>
</head>
<body>
    <h2>Asignar Curso Profesor:</h2>    
    <form method="post" action="asignarcursoprofesor.php">
        <div>
            <label for="dni_profesor">DNI Profesor:</label>
            <input type="number" id="id_dni" name="id_dni">
        </div>
        <div>
            <label for="id_curso">ID Curso:</label>
            <input type="number" id="curso_id" name="curso_id">
        </div>
        <input type="submit" name="submit" class="btn btn-primary" value="Submit">

    </form>
</body>
</html>