<?php

    /*=============================================
    =            Ruta del proyecto          =
    =============================================*/

    $url = Ruta::ctrRuta();

?>

<!doctype html>

<head>

    <!-- Aquí va todo el codigo para el header de la plantilla del sitio web (tittle, metas, links css, fonts, nav ico, etc...)-->

    <!-- Ejemplo: Colocar la variable de la ruta del proyecto ($url) en el href en todos los links para convertir en dinámicas todos los recursos a usar-->
    <link href="<?php echo $url?>views/css/style.css" rel="stylesheet"/>
    
</head>

<body>


<!-- Colocar el siguiente codigo dinámico entre el/los divs principales del body en la maquetación del sitio web -->
<!-- Inicio de divs-->
    
        
        <?php

            /*=============================================
            =            NAV          =
            =============================================*/

            include "modulos/"; // Ruta del archivo

                /*==============================================
                =             Contenido dinamico                =
                ==============================================*/
                
                $rutas = array();
                $ruta = null;
                $infoPropiedad = null;

                if(isset($_GET["ruta"])){

                    $rutas = explode("/", $_GET["ruta"]);

                    $item = "ruta";
                    $valor = $rutas[0];

                        /*==============================================
                        =       URL´s Amigables de paginas        =
                        ==============================================*/

                        $rutaPaginas = ControladorPaginas::ctrMostrarPaginas($item, $valor);

                        if($rutas[0] == $rutaPaginas["ruta"]){

                            $ruta = $rutas[0];

                        }

                        /*==============================================
                        =  Lista blanca de  URL´s Amigables (Páginas que se muestran) =
                        ==============================================*/

                        switch ($ruta) {

                            //Casos con respecto a la cantidad de páginas que habrá en el sitio web

                            case 'nombre de la ruta de la pagina registrada en la bd':
                                include "modulos/"; // Ruta del archivo de la página
                                break;
                            
                            // Página de error 404   
                            default:
                                include "modulos/"; // Ruta del archivo
                                break;

                        }


                }else{

                    // Página index o home por defecto del sitio web
                    include "modulos/"; // Ruta del archivo
          
                }

            /*=============================================
            =            Footer          =
            =============================================*/

            include "modulos/"; // Ruta del archivo

        ?>

    

<!-- Cierre de los divs principales del body -->
  
<!-- Colocación de todos los archivos/plugins de JS o JQuery -->

<!-- Ejemplo: Colocar la variable de la ruta del proyecto ($url) en el href en todos los links para convertir en dinámicas todos los recursos a usar-->
<script src="<?php echo $url?>views/js/jquery-1.11.2.min.js"></script>

</body>

</html>