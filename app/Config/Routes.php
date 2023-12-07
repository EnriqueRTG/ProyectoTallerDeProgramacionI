<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// activar rutas automaticas
//$routes->setAutoRoute(true);

$routes->get('/', 'Home::index');

/*
// Para crear productos
$routes->get('producto/new', 'Producto::new');
$routes->post('producto/create', 'Producto::create');

// Para leer productos
$routes->get('producto', 'Producto::index');
$routes->get('producto/(:num)', 'Producto::show/$1');

// Para actualizar productos
$routes->get('producto/edit/(:num)', 'Producto::edit/$1');
$routes->post('producto/update/(:num)', 'Producto::update/$1'); //peticiones PUT no soportadas por el API de HTML por lo tanto se reemplaza por peticiones del tipo POST

// Para borrar un producto
$routes->post('producto/delete/(:num)', 'Producto::delete/$1'); // con la peticion DELETE pasa lo mismo que con PUT y PATCH, no estan soportadas por la API de HTML entonces se utiliza POST
*/

//$routes->resource('producto'); //ruta de tipo recurso(RESOURCE) que unifica las siete rutas anteriores pero esta pensada para trabajar con API Rest y no con formularios

//Se usara para los CRUDs y manejo de formularios
$routes->presenter('producto'); // para formularios se emplea ruta del tipo PRESENTER que unifica las 7 rutas primeras definidas

