<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilos/estilo.css">
        
    </head>
    <body class="body">
        <h2>RETO TIENDAPP</h2>
        <form class="formulario" enctype='multipart/form-data' action="controlador/create.php" method="post">
            <label>Tamaño Identificación Usuario: </label> <input type="text" name="identifi_usuario"><br><br>
            <label>Tamaño Identificación Zona: </label> <input type="text" name="identifi_zona"><br><br>
            <label>Tamaño Nombre de usuario: </label> <input type="text" name="Nombre_usuario"><br><br>
            <label>Tamaño Email Usuario: </label> <input type="text" name="Email_usuario"><br><br>
            <label>Tamaño Fecha de ingreso: </label> <input type="text" name="Fechadeingreso"><br><br>
            <label>Tamaño Hora de ingreso: </label> <input type="text" name="Horadeingreso"><br><br>
            <label>Cargue su archivo: </label><input type="file" name="plano"><br><br>
            <input type="submit" value="Cargar">
        </form>
    </body>
</html>
