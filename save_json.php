<?php
if (isset($_POST['jsonData'])) {
    $jsonData = $_POST['jsonData'];

    // nombre fijo del archivo
    $filename = "larvas.json";

    // ruta de guardado → carpeta "mapa"
    $path = __DIR__ . "/mapa/" . $filename;

    // crear la carpeta si no existe
    if (!is_dir(__DIR__ . "/mapa")) {
        mkdir(__DIR__ . "/mapa", 0777, true);
    }

    if (file_put_contents($path, $jsonData) !== false) {
        echo "Archivo guardado en: " . $path;
    } else {
        echo "Error al guardar el archivo.";
    }
} else {
    echo "No se recibieron datos.";
}
?>