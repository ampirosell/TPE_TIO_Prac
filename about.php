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
                'nombre' => 'Bugarin Joana',
                'descripcion' => 'Breve descripción del compañero 1.',
                'foto' => 'app/assets/WhatsApp Image 2023-06-10 at 18.13.08.jpg'
            ),
            array(
                'nombre' => 'Hernando Fermin',
                'descripcion' => 'Breve descripción del compañero 2.',
                'foto' => 'app/assets/WhatsApp Image 2023-06-10 at 18.07.30.jpg'
            ),
            array(
                'nombre' => 'Piliavsky Pablo',
                'descripcion' => 'Breve descripción del compañero 3.',
                'foto' => 'app/assets/WhatsApp Image 2023-06-10 at 18.13.08 (1).jpg'
            ),
            array(
                'nombre' => 'Pozzobon Vanina',
                'descripcion' => 'Breve descripción del compañero 4.',
                'foto' => 'app/assets/WhatsApp Image 2023-06-10 at 18.18.08.jpg'
            ),
            array(
                'nombre' => 'Rosell Amparo',
                'descripcion' => 'Breve descripción del compañero 5.',
                'foto' => 'app/assets/WhatsApp Image 2023-06-10 at 18.13.59.jpg'
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
