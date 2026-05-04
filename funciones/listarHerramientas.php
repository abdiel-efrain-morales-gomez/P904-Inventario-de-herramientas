<?php
function listarHerramientas($herramientas) {
    echo "\n======= INVENTARIO =======\n";
    for ($i = 0; $i < count($herramientas); $i++)  {
$h = $herramientas[$i];
echo "ID: " . $h["id"] . "\n";
 echo "Nombre: " . $h["nombre"] . "\n";
 echo "Tipo: " . $h["tipo"] . "\n";
 echo "Cantidad: " . $h["cantidad"] . "\n";
 echo "Estado: " . $h["estado"] . "\n";
 echo "--------------------------\n";
  }
  echo "Presiona Enter para continuar...";
    readline();
    }
