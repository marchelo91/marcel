<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ConsulTech</title>
  <link rel="stylesheet" href="styles.php">
  <link rel="stylesheet" href="estilomision.php"> 
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
    <p class="texto-con-cuadro">Misión:
"Nuestra misión es ofrecer soluciones tecnológicas innovadoras y de vanguardia que impulsen el crecimiento y el éxito de nuestros clientes. 
Nos comprometemos a proporcionar servicios de consultoría integral, desarrollo de software personalizado 
y soporte técnico de primera clase para satisfacer las necesidades específicas de cada empresa."

Visión:
"Nuestra visión es ser líderes reconocidos en el sector de la consultoría tecnológica, destacando por nuestra excelencia en el servicio al cliente, 
nuestra capacidad para adaptarnos a los avances tecnológicos y nuestra contribución al progreso de la sociedad a través de la innovación."

Valores:

Excelencia: Nos esforzamos por alcanzar la excelencia en todo lo que hacemos, 
brindando soluciones de alta calidad y superando las expectativas de nuestros clientes.
Integridad: Actuamos con honestidad, transparencia y ética en todas nuestras relaciones 
y operaciones comerciales.
Colaboración: Fomentamos un ambiente de trabajo colaborativo donde el trabajo en equipo 
y la cooperación son fundamentales para lograr el éxito.
Innovación: Promovemos la creatividad y la innovación 
en el desarrollo de soluciones tecnológicas que impulsen el progreso y la competitividad de nuestros clientes.
Compromiso: Estamos comprometidos con el éxito y la satisfacción de nuestros clientes, 
brindando un servicio personalizado y orientado a resultados.
Responsabilidad social: Nos comprometemos a contribuir positivamente a la sociedad y al medio ambiente 
a través de prácticas comerciales sostenibles y acciones de responsabilidad social corporativa.
Filosofía Empresarial:
"En nuestra empresa, creemos en el poder transformador de la tecnología para mejorar la vida de las personas 
y el rendimiento de las organizaciones. Nos esforzamos por ofrecer soluciones tecnológicas innovadoras y 
adaptadas a las necesidades individuales de cada cliente. Nuestro enfoque centrado en el cliente, combinado 
con un equipo altamente calificado y apasionado por la tecnología, nos permite ofrecer resultados 
excepcionales y generar un impacto positivo en el mundo."</p>
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
  
</body>
</html>