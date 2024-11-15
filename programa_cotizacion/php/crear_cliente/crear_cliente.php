<!--
Sitio Web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl o itred.spa@gmail.com
https://www.itred.cl
Creado, Programado y Diseñado por ITred Spa.
BPPJ
-->

<!-- ------------------------------------------------------------------------------------------------------------
    ------------------------------------- INICIO ITred Spa crear cliente.PHP --------------------------------------
    ------------------------------------------------------------------------------------------------------------- -->

<!-- ------------------------
    -- INICIO CONEXION BD --
    ------------------------ -->

    <?php
    // Establece la conexión a la base de datos de ITred Spa
    $mysqli = new mysqli('localhost', 'root', '', 'ITredSpa_bd');
?>
<!-- ---------------------
     -- FIN CONEXION BD --
     ----------------------- -->


<!DOCTYPE html>
<html lang="es">
    <head> 
    <!-- Abre el elemento de cabecera que contiene metadatos y enlaces a recursos externos -->
    <!-- Define la codificación de caracteres como UTF-8 para asegurar la correcta visualización de caracteres especiales y diversos idiomas -->
    <meta charset="UTF-8"> 
    
    <!-- Configura la vista en dispositivos móviles. width=device-width asegura que el ancho de la página se ajuste al ancho de la pantalla del dispositivo, y initial-scale=1.0 establece el nivel de zoom inicial -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <!-- Define el título de la página que se muestra en la pestaña del navegador -->
    <title>Agregar Cliente</title> 

  <!-- TITULO: IMPORTACIÓN DE ARCHIVO .CSS -->

    <!-- Llama al archivo CSS -->
    <link rel="stylesheet" href="../../css/crear_cliente/crear_cliente.css"> 
    
    <!-- TITULO: ENLAZADO DE PHP  -->
    
    <!-- Llama al archivo programa cotizacion PHP  -->
     
    <a href="../../programa_cotizacion.php" class="boton-fijado">Volver</a>

    <!-- Cierra el elemento de cabecera -->
</head> 

<body>
    <!-- Abre el elemento del cuerpo de la página donde se coloca el contenido visible -->

    <!-- TÍTULO: LISTADO DE CLIENTES -->

        <!-- Llama la lista de cliente -->
            <?php include 'mostrar_clientes.php'; ?>
        <a href="nuevo_cliente.php" class="boton-opcion">Crear nuevo cliente</a>


</body>

<!-- TITULO: IMPORTACION DE ARCHIVO .JS -->

<!-- Llama al archivo JS -->
    <script src="../../js/crear_cliente/crear_cliente.js"></script> 
</html>



     <!-- ---------------------
-- INICIO CIERRE CONEXION BD --
     --------------------- -->
<?php
    $mysqli->close();
?>
<!-- ---------------------
     -- FIN CIERRE CONEXION BD --
     --------------------- -->


<!-- ------------------------------------------------------------------------------------------------------------
    -------------------------------------- FIN ITred Spa crear cliente .PHP ----------------------------------------
    ------------------------------------------------------------------------------------------------------------- -->

<!--
Sitio Web Creado por ITred Spa.
Direccion: Guido Reni #4190
Pedro Aguirre Cerda - Santiago - Chile
contacto@itred.cl o itred.spa@gmail.com
https://www.itred.cl
Creado, Programado y Diseñado por ITred Spa.
BPPJ
-->