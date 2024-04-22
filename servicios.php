<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ConsulTech</title>
  <link rel="stylesheet" href="styles.php">
</head>
<body>
  <header>
    <div class="header-container">
      <h1>ConsulTech</h1>
      <nav>
        <ul>
        <li><a href="index.php">Home</a></li>
          <li><a href="servicios.php">Nuestros Servicios</a></li>
          <li><a href="contacto.php">Contáctenos</a></li>
          <li><a href="mision.php">Nosotros</a></li>
        </ul>
      </nav>
    </div>
    <button id="mode-toggle">Dia/Noche</button>
  </header>
  <?php
    // Ruta de la imagen
    $ruta_imagen = 'img/consultoria.jpg';
    ?>

        <img src="<?php echo $ruta_imagen; ?>" alt="Imagen">
  
  <div class="content">
    
  </div>
  <script>
    const modeToggle = document.getElementById('mode-toggle');
    const body = document.body;
    
    const darkMode = <?= isset($_COOKIE['dark_mode']) && $_COOKIE['dark_mode'] === 'true' ? 'true' : 'false' ?>;
    
    function toggleDarkMode() {
      body.classList.toggle('dark-mode');
      // Save the user's preference in a cookie
      document.cookie = "dark_mode=" + body.classList.contains('dark-mode');
    }

    // Set the initial mode
    if (darkMode) {
      body.classList.add('dark-mode');
    }

    modeToggle.addEventListener('click', toggleDarkMode);
  </script>
  <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4 Bloques en PHP</title>
    <style>
        .contenedor {
            text-align: center;
        }

        .bloque {
            width: 300px;
            height: 300px;
            background-color: #7CF900;
            margin: 10px;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            vertical-align: top;
        }
    </style>
</head>

<body>

    <div class="contenedor">
        <?php
        // Datos para cada bloque
        $bloques = array(
            array('titulo' => 'Consultoría Digital', 'contenido' => 'asesoramiento y orientación especializada en estrategias, tecnologías y herramientas digitales'),
            array('titulo' => 'Soluciones Multiexperiencia', 'contenido' => 'una experiencia de usuario coherente y fluida a través de múltiples dispositivos y canales digitales, como aplicaciones móviles, sitios web, asistentes virtuales, dispositivos inteligentes, realidad aumentada, realidad virtual, entre otros. '),
            array('titulo' => 'Evolución de Ecosistemas', 'contenido' => 'Este servicio incluye elementos como redes sociales, servicios en la nube, aplicaciones móviles, dispositivos inteligentes, plataformas de comercio electrónico, entre otros, que colaboran y se integran para ofrecer experiencias digitales completas y conectadas.'),
            array('titulo' => 'Soluciones Low-Code', 'contenido' => 'plataforma de desarrollo de software que permite a los usuarios crear aplicaciones con un mínimo de programación manual, ya que proporciona herramientas visuales y predefinidas para la creación de aplicaciones.')
        );

        // Mostrar cada bloque
        foreach($bloques as $bloque) {
            echo '<div class="bloque">';
            echo '<h2>' . $bloque['titulo'] . '</h2>';
            echo '<p>' . $bloque['contenido'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>

</body>
</html>

</body>
</html>
