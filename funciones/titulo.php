<?php
include_once "centrar.php";

$titulo = centrar($titulo, $ancho); 
function titulo(string $titulo, $ancho = 40): void {
    echo "╔" . str_repeat("═", $ancho) . "╗\n";
    echo "║" .$titulo."║\n";
    echo "╚" . str_repeat("═", $ancho) . "╝\n";
}