<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>validacion</title>
</head>
<body>
    
    <form action="Validacion.php">
        <label for="">Nombre</label>
        <input type="text" name="nombre">       
        <br><br>
        <label for="">Edad</label>
        <input type="text" name="edad">
        <br><br>
        <input type="submit" value="validar" >                               
    </form>
    <?php
    
        error_reporting(0);
        $nombre = $_REQUEST['nombre'];
        $edad = $_REQUEST['edad'];
        if(preg_match("/^[A-Z]/",$nombre) and !preg_match("/[1-9]/",$nombre))
        {
            echo "nombre ingresado correctamente <br>";   
        }
        else
        {
            echo "error <br>";  
        }
        if(preg_match("/[1-9]{1}|{2}{3}/",$edad) and !preg_match("/[a-z]/i",$edad))
        {
            echo "edad ingresado correctamente <br>";   
        }
        else
        {
            echo "error";
        }
    ?>
    
</body>
</html>