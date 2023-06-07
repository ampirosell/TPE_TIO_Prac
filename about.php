<!DOCTYPE html>
<html>
<head>
    <title>About</title>
    <style>
        /* Estilos CSS para la página */
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333333;
            text-align: center;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            text-align: center;
            width: 200px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            border-radius: 50%;
            height: 100px;
            margin-bottom: 10px;
            width: 100px;
        }

        .card h2 {
            color: #333333;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .card p {
            color: #666666;
            font-size: 14px;
        }
    </style>
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
