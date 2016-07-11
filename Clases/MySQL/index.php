<?php
    
    $conexion = mysqli_connect("localhost","root","","prueba");
    $sql = 'SELECT * FROM productos';
    $consulta=mysqli_query($conexion,$sql);
    
    while($resultado = mysqli_fetch_row($consulta))
    {
        for($i=0 ; $i < count($resultado);$i++)
        {
            echo $resultado[$i]."<br>";
        }    
    }

?>