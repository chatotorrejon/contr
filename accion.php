<script src="js/javascript.js"></script>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $fecha = $_POST["fecha"];
        $servicio = $_POST["servicio"];
        
        // Aquí podrías guardar los datos en una base de datos o generar un archivo PDF, etc.
        
        // Imprimir el contrato
        echo "<h2>Contrato de Servicios</h2>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Fecha:</strong> $fecha</p>";
        echo "<p><strong>Descripción del Servicio:</strong></p>";
        echo "<p>$servicio</p>";
    }
?>
<button id="imprimir" onclick="imprimirContrato()">Imprimir Contrato</button>