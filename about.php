<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css">
    <title>About</title>
</head>
<body>
    <h1>About</h1>
    <div class="container">
        <?php
        // Información de los compañeros
        $companeros = array(
            array(
                'nombre' => 'Compañero 1',
                'descripcion' => 'Breve descripción del compañero 1.',
                'foto' => 'ruta/companero1.jpg'
            ),
            array(
                'nombre' => 'Compañero 2',
                'descripcion' => 'Breve descripción del compañero 2.',
                'foto' => 'ruta/companero2.jpg'
            ),
            array(
                'nombre' => 'Compañero 3',
                'descripcion' => 'Breve descripción del compañero 3.',
                'foto' => 'ruta/companero3.jpg'
            ),
            array(
                'nombre' => 'Compañero 4',
                'descripcion' => 'Breve descripción del compañero 4.',
                'foto' => 'ruta/companero4.jpg'
            ),
            array(
                'nombre' => 'Compañero 5',
                'descripcion' => 'Breve descripción del compañero 5.',
                'foto' => 'ruta/companero5.jpg'
            )
        );

        // Generar tarjeta para cada compañero
        foreach ($companeros as $compañero) {
            echo '<div class="card">';
            echo '<img src="' . $compañero['foto'] . '" alt="' . $compañero['nombre'] . '">';
            echo '<h2>' . $compañero['nombre'] . '</h2>';
            echo '<p>' . $compañero['descripcion'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
