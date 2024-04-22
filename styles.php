<?php
  header("Content-type: text/css; charset: UTF-8");
  
  // configuracion modo oscuro
  $darkMode = isset($_COOKIE['dark_mode']) && $_COOKIE['dark_mode'] === 'true';
?>

/* Estilos para el menú principal */

body{
  background-img url(digital.jpeg);
}




.header-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20pxpx;
}


nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex;
}

nav ul li {
  margin-left: 100px;
}

nav ul li a {
  text-decoration: none;
  color: #000000;
  padding: 7px 12px;
  border-radius: 20pxpx;
}

nav ul li a:hover {
  background-color: #ffffff;
  color: #000000;
}


body {
  font-family: Arial, sans-serif;
  transition: background-color 0.5s ease;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  margin: 0;
}

header {
  background-color: #005BD0;
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.content {
  padding: 20px;
  flex-grow: 1;
}

<?php if ($darkMode): ?>
  body {
    background-color: #333;
    color: #fff;
  }
  
<?php endif; ?>


