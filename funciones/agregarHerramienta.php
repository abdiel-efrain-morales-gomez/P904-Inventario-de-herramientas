<?php
function agregarHerramienta(&$herramientas) {

    echo "\n--- Registrar herramienta ---\n";

    echo "Nombre: ";
    $nombre = readline();

    echo "Tipo: ";
    $tipo = readline();

    echo "Cantidad: ";
    $cantidad = (int)readline();

    echo "Estado (Disponible/No disponible): ";
    $estado = readline();

    $nuevoId = 1;

    for ($i = 0; $i < count($herramientas); $i++) {
        if ($herramientas[$i]["id"] >= $nuevoId) {
            $nuevoId = $herramientas[$i]["id"] + 1;
        }
    }

    $herramientas[] = [
        "id" => $nuevoId,
        "nombre" => $nombre,
        "tipo" => $tipo,
        "cantidad" => $cantidad,
        "estado" => $estado
    ];

    echo "Herramienta agregada.\n";
}