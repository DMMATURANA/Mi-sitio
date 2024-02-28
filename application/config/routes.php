<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] = 'Welcome/index';
$route['inicio'] = 'Sitio/inicio';


$route['productos'] = 'Sitio/productos';

$route['registrar-admin'] = 'Administrador/registrar_admin';
$route['registrar-admin/reg-guardar'] = 'Administrador/reg_guardar';

$route['iniciar-sesion-admin'] = 'Administrador/iniciar_sesion_admin';
$route['iniciar-sesion-admin/verificacion'] = 'Administrador/verificacion';
$route['iniciar-sesion-admin/sesion'] = 'AdminSec/sesion';
$route['iniciar-sesion-admin/cerrar-sesion'] = 'Administrador/cerrar_sesion';

$route['dashboard/tabla-usuarios'] = 'AdminSec/tabla_usuarios';
$route['dashboard/registrar-usuario'] = 'AdminSec/registrar_usuario';
$route['dashboard/tabla-usuarios-registrar'] = 'AdminSec/tabla_usuarios_registrar';
$route['dashboard/editar_usuario/(:any)'] = 'AdminSec/editar_usuario/$1';
$route['dashboard/tabla-usuarios-editar'] = 'AdminSec/tabla_usuarios_editar';
$route['dashboard/tabla-usuarios-eliminar/(:any)'] = 'AdminSec/tabla_usuarios_eliminar/$1';

$route['dashboard/tabla-transaccion'] = 'AdminSec/tabla_transaccion';
$route['dashboard/tabla-productos'] = 'AdminSec/tabla_productos';
$route['dashboard/registrar-producto'] = 'AdminSec/registrar_producto';
$route['dashboard/tabla-productos-registrar'] = 'AdminSec/tabla_productos_registrar';
$route['dashboard/editar_producto/(:any)'] = 'AdminSec/editar_producto/$1';
$route['dashboard/tabla-productos-editar'] = 'AdminSec/tabla_productos_editar';
$route['dashboard/tabla-productos-eliminar/(:any)'] = 'AdminSec/tabla_productos_eliminar/$1';

// -------- Rutas del Usuario ---------\\

$route['registrar-usuario'] = 'Usuario/registrar_usuario';
$route['registrar-usuario/reg-guardar'] = 'Usuario/reg_guardar';

$route['iniciar-sesion-usuario'] = 'Usuario/iniciar_sesion_usuario';
$route['iniciar-sesion-usuario/verificacion'] = 'Usuario/verificacion';
$route['iniciar-sesion-usuario/sesion'] = 'UsuarioSec/sesion';
$route['iniciar-sesion-usuario/cerrar-sesion'] = 'Usuario/cerrar_sesion';

$route['Carrito'] = 'Sitio/Carrito';
$route['agregarProducto/carrito'] = 'Carrito/agregarProducto';


/*crear usuario(registrar login)*/

/*perfil de usuario*/
$route['perfiles'] = 'perfiles';




$route['default_controller'] = 'sitio';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
