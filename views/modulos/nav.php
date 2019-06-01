<?php

    // Colocar dentro del ul del diseño de tu Nav el siguiente código PHP
    $item = null;
    $valor = null;

    $paginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);

    foreach ($paginas as $key => $value){
        
        // Impresión de las páginas que tienes registradas en tu BD, colocar en el diseño de tu li. href="'.$value["ruta"].'" (nombre de la ruta de las páginas). Nombre del item="'.$value["nombre"].'" (nombre que se mostrará en el nav de tu sitio web)
        echo '
        
        <li class=""><a data-scroll href="'.$value["ruta"].'">'.$value["nombre"].'</a></li>
        
        ';

    }

?>