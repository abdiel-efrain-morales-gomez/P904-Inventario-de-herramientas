<?php
include_once "funciones/index.php";

$herramientas = datosHerramientas();
$salir = false;

while (!$salir) {

    imprimirMenu();

    $opcion = (int)readline();

    switch ($opcion) {

        case 1:
            agregarHerramienta($herramientas);
            break;

        case 2:
            listarHerramientas($herramientas);
            break;

        case 3:
            eliminarHerramienta($herramientas);
            break;

        case 4:
            echo "Adios!";
            $salir = true;
            break;

        default:
            echo "Opcion no valida\n";
    }
} 