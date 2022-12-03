<?php
/* ESTRUCTURA FOR */

/* for ($i = 0; $i < 100; $i++) {
    echo $i . ', ';
}  */
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructura For</title>
</head>

<body>
    <form action="for.php" method="post">
        <label for="">Cuantos Empleados?</label>
        <input type="number" name="cantidad">
        <button type="submit" name="procesar">Procesar</button>
    </form>
    <?php /* VERIFICAR DATOS DEL FORMULARIO */
    if (isset($_POST['procesar'])) {
        $cantidadEmpleados = $_POST['cantidad'];

        for ($i = 0; $i < $cantidadEmpleados; $i++) {        
    ?>
    <h2>INGRESE LA INFORMACIÓN DEL EMPLEADO <?php echo $i+1; ?></h2>
    <form action="">
        <label for="">Sueldo</label>
        <input type="text">
    </form>
    <hr>
    <?php }
    } ?>
</body>

</html>