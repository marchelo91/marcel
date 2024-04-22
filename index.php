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

    
    if (darkMode) {
      body.classList.add('dark-mode');
    }

    modeToggle.addEventListener('click', toggleDarkMode);
  </script>
  
</body>
</html>
