<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    
        setcookie('nombre',"joel",time()+10);    
        $user = $_COOKIE['nombre'];
        echo $user;
    ?>
    
    <a href="cookie2.php">ir a pag2</a>
</body>
</html>