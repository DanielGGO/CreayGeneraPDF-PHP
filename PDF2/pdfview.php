<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <title>Generar Pdf´s desde PHP</title>
        <style type="text/css">
    </style>
</head>
<body>
 
 <?php if(isset($_POST['Nombre'])): ?>
<h3> Nombre Completo </h3> 
<p><?=$_POST['Nombre']?>
 <?=$_POST['Ap']?> 
 <?=$_POST['App']?> </p>
<?php  endif; ?>
    <?php if(isset($_POST['Correo'])): ?>
<h3> Correo Electronico </h3> <p><?=$_POST['Correo']?> </p>
    <?php  endif; ?>

    <?php if(isset($_POST['telefono'])): ?>
<h3> Numero de Contacto</h3> <p><?=$_POST['telefono']?> </p>
    <?php  endif; ?>


 <h3><a href="www.google.com">Más Información</a></h3>
</body>
</html>