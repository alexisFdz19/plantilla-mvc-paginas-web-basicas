<?php

class ControladorPaginas{

	/*=============================================
	=           Controlador          =
	=============================================*/

	static public function ctrMostrarPaginas($item, $valor){

		$tabla = /* Nombre de la tabla donde van almacenadas las rutas en la base de datos*/;

		$respuesta = ModeloCategorias::mdlMostrarPaginas($tabla, $item, $valor);

		return $respuesta;

	}

}