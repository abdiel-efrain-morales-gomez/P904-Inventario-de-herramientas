<?php
function eliminarHerramienta(&$herramientas){
 echo "\n--- Eliminar herramienta ---\n";
 echo "Ingresa el ID: ";
  $id = (int)readline();
      for ($i = 0; $i < count($herramientas); $i++) {
         if ($herramientas[$i]["id"] === $id) {
            array_splice($herramientas, $i, 1);
 echo "Herramienta eliminada.\n";
            return;
         }
      }

    echo "ID no encontrado\n";
    }

       
