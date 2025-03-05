<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;

$router = new Router();




$router->get('/',[LoginController::class, 'directorio']);

$router->get('/buscar',[LoginController::class, 'buscar']);
$router->post('/buscar',[LoginController::class, 'buscar']);

$router->get('/adeudos',[LoginController::class, 'adeudos']);
$router->post('/adeudos',[LoginController::class, 'adeudos']);

$router->get('/cursos',[LoginController::class, 'cursos']);
$router->post('/cursos',[LoginController::class, 'cursos']);

$router->get('/nuevoClient',[LoginController::class, 'nuevoClient']);
$router->post('/nuevoClient',[LoginController::class, 'nuevoClient']);

$router->get('/alumnos_inscritos',[LoginController::class, 'alumnos_inscritos']);
$router->post('/alumnos_inscritos',[LoginController::class, 'alumnos_inscritos']);

$router->get('/confirmar_inscripcion',[LoginController::class, 'confirmar_inscripcion']);
$router->post('/confirmar_inscripcion',[LoginController::class, 'confirmar_inscripcion']);

$router->get('/crearCurso',[LoginController::class, 'crearCurso']);
$router->post('/crearCurso',[LoginController::class, 'crearCurso']);

$router->get('/crearUsuario',[LoginController::class, 'crearUsuario']);
$router->post('/crearUsuario',[LoginController::class, 'crearUsuario']);

$router->get('/cursos_inscritos',[LoginController::class, 'cursos_inscritos']);
$router->post('/cursos_inscritos',[LoginController::class, 'cursos_inscritos']);

$router->get('/estado_cuenta',[LoginController::class, 'estado_cuenta']);
$router->post('/estado_cuenta',[LoginController::class, 'estado_cuenta']);

$router->get('/lista_alumnos',[LoginController::class, 'lista_alumnos']);
$router->post('/lista_alumnos',[LoginController::class, 'lista_alumnos']);

$router->get('/modificar_alumnos_inscritos',[LoginController::class, 'modificar_alumnos_inscritos']);
$router->post('/modificar_alumnos_inscritos',[LoginController::class, 'modificar_alumnos_inscritos']);

$router->get('/modificar_cursos_inscritos',[LoginController::class, 'modificar_cursos_inscritos']);
$router->post('/modificar_cursos_inscritos',[LoginController::class, 'modificar_cursos_inscritos']);

$router->get('/modificar_estado_cuenta',[LoginController::class, 'modificar_estado_cuenta']);
$router->post('/modificar_estado_cuenta',[LoginController::class, 'modificar_estado_cuenta']);

$router->get('/perfil_cliente',[LoginController::class, 'perfil_cliente']);
$router->post('/perfil_cliente',[LoginController::class, 'perfil_cliente']);

$router->get('/seleccionar_cursos',[LoginController::class, 'seleccionar_cursos']);
$router->post('/seleccionar_cursos',[LoginController::class, 'seleccionar_cursos']);

$router->get('/modificar_curso',[LoginController::class, 'modificar_curso']);
$router->post('/modificar_curso',[LoginController::class, 'modificar_curso']);

$router->get('/busqueda_clientes',[LoginController::class, 'busqueda_clientes']);
$router->post('/busqueda_clientes',[LoginController::class, 'busqueda_clientes']);
// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();