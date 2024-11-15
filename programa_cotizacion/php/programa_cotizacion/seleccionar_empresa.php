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
    ------------------------------------- INICIO ITred Spa seleccionar empresa.PHP --------------------------------------
    ------------------------------------------------------------------------------------------------------------- -->
    <!------------------Archivo CSS ----------------------->
    <link rel="stylesheet" href="css/programa_cotizacion/seleccionar_empresa.css">
    <!----------------------------------------------------->

<!-- TÍTUZLO: SELECCIÓN DE EMPRESA -->

<!-- NOMBRE DEL FORMULARIO -->

<label for="empresa">Seleccione la Empresa:</label>

<!-- Combo Box seleccionar empresa -->

<div class="custom-select"> 
    <div class="selected-option">Seleccione una empresa</div>
    <select id="empresa" name="empresa" required>
        <option value="">Seleccione</option>
        
        <?php
        // Definir la ruta manual para la prueba

        // ruta de la imagen del formulario
        $rutaPrueba = 'imagenes/programa_cotizacion/Captura de pantalla 2024-08-27 141315.png'; // Ruta manual para probar

        // Función para ajustar la ruta de la imagen
        function ajustarRuta($ruta) {
            // Elimina los primeros niveles "../" y añade la ruta base
            return preg_replace('/^(\.\.\/)+/', '', $ruta);
        }

        // Consulta SQL para obtener empresas y sus respectivas imágenes

        $sql = "
            SELECT E_Empresa.id_empresa, E_Empresa.rut_empresa, E_Empresa.nombre_empresa, FP_FotosPerfil.ruta_foto
            FROM E_Empresa
            LEFT JOIN fp_FotosPerfil ON E_Empresa.id_foto = fp_FotosPerfil.id_foto
        ";
        $result = $mysqli->query($sql); // Ejecuta la consulta SQL

        // Reposición del puntero del resultado al principio para volver a recorrerlo

        $result->data_seek(0);

        // Itera sobre los resultados y crea las opciones del select

        while ($row = $result->fetch_assoc()): 
            $rutaAjustada = ajustarRuta($row['ruta_foto']);
        ?>
            <option value="<?php echo $row['id_empresa']; ?>" data-image="<?php echo $rutaAjustada; ?>">
                <?php echo $row['rut_empresa'] . " - " . $row['nombre_empresa']; ?>
            </option>
        <?php endwhile; ?>

    </select>

<!-- TÍTULO: LISTA DE EMPRESAS -->


    <!-- LISTA DE EMPRESA QUE MUESTRA EL COMBO BOX -->

    <!-- muestra las empresas creadas desde la base de datos -->
    <div class="option-list" id="option-list">
        <?php

        // Reposición del puntero del resultado al principio para volver a recorrerlo
        
        $result->data_seek(0); 

        // Itera sobre los resultados y crea los elementos de la lista de opciones

        while ($row = $result->fetch_assoc()): 
            $rutaAjustada = ajustarRuta($row['ruta_foto']);
        ?>
            <div data-value="<?php echo $row['id_empresa']; ?>" data-image="<?php echo $rutaAjustada; ?>">
                <img src="<?php echo $rutaAjustada; ?>" alt="Foto de <?php echo $row['nombre_empresa']; ?>">
                <?php echo $row['rut_empresa'] . " - " . $row['nombre_empresa']; ?>
            </div>
        <?php endwhile; ?>


    </div>

</div>

        <!----------------archivo JS------------------------>

        <script src="js/programa_cotizacion/seleccionar_empresa.js"></script> 

            


     <!-- ------------------------------------------------------------------------------------------------------------
    -------------------------------------- FIN ITred Spa seleccionar empresa .PHP ----------------------------------------
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



