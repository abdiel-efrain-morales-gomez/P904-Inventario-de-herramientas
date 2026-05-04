<?php
function agregarHerramienta(&$herramientas) {

    echo "Registrar herramienta\n ";

    echo "Nombre: ";
    $nombre = readline();

    echo "Tipo: ";
    $tipo = readline();

    echo "Cantidad: ";
    $cantidad = (int)readline();

    echo "Estado (Disponible/No disponible): ";
    $estado = readline();

    $herramientas[] = [
        "id" => count($herramientas),
        "nombre" => $nombre,
        "tipo" => $tipo,
        "cantidad" => $cantidad,
        "estado" => $estado
    ];

    echo "Herramienta agregada.\n";
}
