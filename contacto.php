<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Contacto</title>
    <link rel="stylesheet" type="text/css" href="estilocontacto.php">
</head>
<body>
    <h2>Formulario de Contacto</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Nombre completo: <input type="text" name="nombre"><br><br>
        Servicio:
        <select name="servicio">
            <option value="Consultoria digital">Consultoria digital</option>        
            <option value="Soluciones Multiexperiencia">Soluciones Multiexperiencia</option>
            <option value="Evolución de Ecosistemas">Evolución de Ecosistemas</option>
            <option value="Soluciones Low-Code">Soluciones Low-Code</option>
            
            <!-- Agrega más opciones según sea necesario -->
        </select><br><br>
        Mensaje: <textarea name="mensaje"></textarea><br><br>
        <input type="submit" name="submit" value="Enviar">
        
    </form>

    <?php
    // Verificamos si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $servicio = $_POST['servicio'];
        $mensaje = $_POST['mensaje'];

        // Validaciones
        if (empty($nombre) || empty($mensaje)) {
            echo "Por favor, complete todos los campos.";
        } else {
            // Mostramos los datos por consola
            echo "<script>console.log('Nombre: $nombre');</script>";
            echo "<script>console.log('Servicio: $servicio');</script>";
            echo "<script>console.log('Mensaje: $mensaje');</script>";
        }
    }
    ?>
<br><br>    
<hr><hr>
<p>Av. Providencia 1234, Oficina 601
            Providencia, Santiago
            Chile
            
            Teléfono: +56 2 1234 5678
            
            www.coningenio.cl
            Correo electrónico:
            info@coningenio.cl
            </p>
            <a href="index.php">inicio</a>
</body>
</html>
