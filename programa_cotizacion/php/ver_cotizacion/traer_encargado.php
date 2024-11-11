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
    ------------------------------------- INICIO ITred Spa Traer encargado .PHP --------------------------------------
    ------------------------------------------------------------------------------------------------------------- -->

    <?php
// Inicializa las variables con valores por defecto
$enc_rut = $enc_nombre = $enc_email = $enc_fono = $enc_celular = $enc_proyecto = '';

// Verificar si se ha enviado un ID de encargado
if (isset($_GET['id']) && intval($_GET['id']) > 0) {
    $id_encargado = intval($_GET['id']);
    
    // Consulta para obtener los datos del encargado basado en el ID
    $sql_encargado = "SELECT 
        e.rut_encargado,
        e.nombre_encargado,
        e.email_encargado,
        e.fono_encargado,
        e.celular_encargado,
        p.nombre_proyecto as enc_proyecto
    FROM C_Cotizaciones cot
    JOIN C_Encargados e ON e.id_encargado = cot.id_encargado
    LEFT JOIN C_Proyectos p ON cot.id_proyecto = p.id_proyecto
    WHERE cot.id_cotizacion = ?";

    if ($stmt_encargado = $mysqli->prepare($sql_encargado)) {
        $stmt_encargado->bind_param("i", $id_encargado);
        $stmt_encargado->execute();
        $result_encargado = $stmt_encargado->get_result();
        
        if ($result_encargado->num_rows === 1) {
            $row = $result_encargado->fetch_assoc();
            // Asignar los valores a las variables
            $enc_rut = $row['rut_encargado'];
            $enc_nombre = $row['nombre_encargado'];
            $enc_email = $row['email_encargado'];
            $enc_fono = $row['fono_encargado'];
            $enc_celular = $row['celular_encargado'];
            $enc_proyecto = $row['enc_proyecto'];
        } else {
            echo "<p>No se encontró el encargado para el ID especificado.</p>";
        }

        $stmt_encargado->close();
    } else {
        echo "<p>Error al preparar la consulta del encargado: " . $mysqli->error . "</p>";
    }
}
?>


<!-- TÍTULO: IMPORTACIÓN DE ARCHIVO .CSS -->

    <!-- llama al archivo CSS -->
    <link rel="stylesheet" href="../../css/ver_cotizacion/traer_encargado.css">


<!-- TÍTULO: FILA PARA MODIFICAR DATOS DEL ENCARGADO -->
<fieldset class="row">
    <legend>Modificar Datos Encargado</legend>
    <div class="box-6 cuadro-datos">
        <div class="form-group-inline">
            <div class="form-group">
                <label for="encargado_rut">RUT:</label>
                <input type="text" id="encargado_rut" name="encargado_rut" 
                    minlength="7" maxlength="12" 
                    placeholder="Ej: 12.345.678-9" 
                    value="<?php echo htmlspecialchars($enc_rut); ?>" 
                    required oninput="FormatearRut(this)">
            </div>
            <div class="form-group">
                <label for="enc_nombre">Nombre:</label>
                <input type="text" id="enc_nombre" name="enc_nombre" 
                    placeholder="Ej: Juan Pérez" 
                    value="<?php echo htmlspecialchars($enc_nombre); ?>" 
                    required>
            </div>
        </div>
        <div class="form-group">
            <label for="enc_email">Email:</label>
            <input type="email" id="enc_email" name="enc_email" 
                placeholder="ejemplo@gmail.com" 
                value="<?php echo htmlspecialchars($enc_email); ?>" 
                required>
        </div>
        <div class="form-group">
            <label for="enc_fono">Teléfono:</label>
            <input type="text" id="enc_fono" name="enc_fono" 
                pattern="\+?\d{7,15}" 
                placeholder="+56 9 1234 1234" 
                value="<?php echo htmlspecialchars($enc_fono); ?>" 
                required>
        </div>
    </div>
    <div class="box-6 cuadro-datos cuadro-datos-left">
        <div class="form-group">
            <label for="enc_celular">Celular:</label>
            <input type="text" id="enc_celular" name="enc_celular" 
                pattern="\+?\d{7,15}" 
                placeholder="+56 9 1234 1234" 
                value="<?php echo htmlspecialchars($enc_celular); ?>">
        </div>
        <div class="form-group">
            <label for="enc_proyecto">Proyecto Asignado:</label>
            <input type="text" id="enc_proyecto" name="enc_proyecto" 
                placeholder="Ej: Proyecto XYZ" 
                value="<?php echo htmlspecialchars($enc_proyecto); ?>" 
                minlength="3" 
                maxlength="100">
        </div>
    </div>
</fieldset>

<!-- TÍTULO: IMPORTACIÓN DE ARCHIVO .JS -->

    <!-- llama al archivo JS -->
    <script src="../../js/ver_cotizacion/traer_encargado.js"></script> 

<!-------------------------------------------------------------------------->

<!-- ------------------------------------------------------------------------------------------------------------
    -------------------------------------- FIN ITred Spa Traer encargado .PHP ----------------------------------------
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
