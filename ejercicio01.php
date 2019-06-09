<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 32 - 01</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];

        // Validar que haya ingresado nombre, apellido y edad
        $mensajes_error = '';

        if ($nombre == '') { // No ingreso el nombre
            $mensajes_error = $mensajes_error . 'Debes ingresar el nombre<br>';
        }
        if ($apellido == '') { // No ingreso el apellido
            $mensajes_error = $mensajes_error . 'Debes ingresar el apellido<br>';
        }
        if ($edad == '') { // No ingreso el edad
            $mensajes_error = $mensajes_error . 'Debes ingresar la edad<br>';
        }

        // Si $mensajes_error no es '' (el valor inicial) => hay al menos un error
        if ($mensajes_error!='') { // Al menos no ingreso un campo
            echo $mensajes_error;
        } else { // Ingreso todos los campos
            if ($edad>=18) {
                echo "Es mayor de edad";
            } else {
                echo "Es menor de edad";
            }
        } 
        
        ?>
        <a href="ejercicio01.html">Volver al formulario</a>
    </div>
</body>

</html>