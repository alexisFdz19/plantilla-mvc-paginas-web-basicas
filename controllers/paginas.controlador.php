<?php

class ControladorPaginas{

	/*=============================================
	=            Paginas          =
	=============================================*/

	static public function ctrMostrarPaginas($item, $valor){

		$tabla = /* Nombre de la tabla donde van almacenadas las rutas de la paginas del sitio web*/;

		$respuesta = ModeloCategorias::mdlMostrarPaginas($tabla, $item, $valor);

		return $respuesta;

	}

}