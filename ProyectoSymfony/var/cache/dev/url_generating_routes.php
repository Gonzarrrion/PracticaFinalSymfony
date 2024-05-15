<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'anadir_nuevo_libro' => [[], ['_controller' => 'App\\Controller\\AnadirNuevoLibroController::nuevo'], [], [['text', '/anadir/nuevo/libro']], [], [], []],
    'buscar_biblioteca_ciudad' => [[], ['_controller' => 'App\\Controller\\BuscarBibliotecaCiudadController::index'], [], [['text', '/buscar/biblioteca/ciudad']], [], [], []],
    'buscar_biblioteca_nombre' => [[], ['_controller' => 'App\\Controller\\BuscarBibliotecaNombreController::index'], [], [['text', '/buscar/biblioteca/nombre']], [], [], []],
    'buscar_libro_autor_biblioteca' => [[], ['_controller' => 'App\\Controller\\BuscarLibroAutorBibliotecaController::index'], [], [['text', '/buscar/libro/autor/biblioteca']], [], [], []],
    'buscar_libro_editorial_biblioteca' => [[], ['_controller' => 'App\\Controller\\BuscarLibroEditorialBibliotecaController::index'], [], [['text', '/buscar/libro/editorial/biblioteca']], [], [], []],
    'buscar_libro_titulo_biblioteca' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloBibliotecaController::index'], [], [['text', '/buscar/libro/titulo/biblioteca']], [], [], []],
    'buscar_libro_titulo' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloController::index'], [], [['text', '/buscar/libro/titulo']], [], [], []],
    'buscar_libro_titulo_disponibilidad' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloDisponibilidadController::index'], [], [['text', '/buscar/libro/titulo/disponibilidad']], [], [], []],
    'editar_biblioteca' => [['id'], ['_controller' => 'App\\Controller\\EditarBibliotecaController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editar/biblioteca']], [], [], []],
    'editar_libro' => [['id'], ['_controller' => 'App\\Controller\\EditarLibroController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editar/libro']], [], [], []],
    'insertar_biblioteca' => [[], ['_controller' => 'App\\Controller\\InsertarBibliotecaController::index'], [], [['text', '/insertar/biblioteca']], [], [], []],
    'app_listar_bibliotecas' => [[], ['_controller' => 'App\\Controller\\ListarBibliotecasController::index'], [], [['text', '/listar/bibliotecas']], [], [], []],
    'listar_libros_biblioteca' => [[], ['_controller' => 'App\\Controller\\ListarLibrosBibliotecaController::index'], [], [['text', '/listar/libros/biblioteca']], [], [], []],
    'App\Controller\AnadirNuevoLibroController::nuevo' => [[], ['_controller' => 'App\\Controller\\AnadirNuevoLibroController::nuevo'], [], [['text', '/anadir/nuevo/libro']], [], [], []],
    'App\Controller\BuscarBibliotecaCiudadController::index' => [[], ['_controller' => 'App\\Controller\\BuscarBibliotecaCiudadController::index'], [], [['text', '/buscar/biblioteca/ciudad']], [], [], []],
    'App\Controller\BuscarBibliotecaNombreController::index' => [[], ['_controller' => 'App\\Controller\\BuscarBibliotecaNombreController::index'], [], [['text', '/buscar/biblioteca/nombre']], [], [], []],
    'App\Controller\BuscarLibroAutorBibliotecaController::index' => [[], ['_controller' => 'App\\Controller\\BuscarLibroAutorBibliotecaController::index'], [], [['text', '/buscar/libro/autor/biblioteca']], [], [], []],
    'App\Controller\BuscarLibroEditorialBibliotecaController::index' => [[], ['_controller' => 'App\\Controller\\BuscarLibroEditorialBibliotecaController::index'], [], [['text', '/buscar/libro/editorial/biblioteca']], [], [], []],
    'App\Controller\BuscarLibroTituloBibliotecaController::index' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloBibliotecaController::index'], [], [['text', '/buscar/libro/titulo/biblioteca']], [], [], []],
    'App\Controller\BuscarLibroTituloController::index' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloController::index'], [], [['text', '/buscar/libro/titulo']], [], [], []],
    'App\Controller\BuscarLibroTituloDisponibilidadController::index' => [[], ['_controller' => 'App\\Controller\\BuscarLibroTituloDisponibilidadController::index'], [], [['text', '/buscar/libro/titulo/disponibilidad']], [], [], []],
    'App\Controller\EditarBibliotecaController::index' => [['id'], ['_controller' => 'App\\Controller\\EditarBibliotecaController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editar/biblioteca']], [], [], []],
    'App\Controller\EditarLibroController::index' => [['id'], ['_controller' => 'App\\Controller\\EditarLibroController::index'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/editar/libro']], [], [], []],
    'App\Controller\InsertarBibliotecaController::index' => [[], ['_controller' => 'App\\Controller\\InsertarBibliotecaController::index'], [], [['text', '/insertar/biblioteca']], [], [], []],
    'App\Controller\ListarBibliotecasController::index' => [[], ['_controller' => 'App\\Controller\\ListarBibliotecasController::index'], [], [['text', '/listar/bibliotecas']], [], [], []],
    'App\Controller\ListarLibrosBibliotecaController::index' => [[], ['_controller' => 'App\\Controller\\ListarLibrosBibliotecaController::index'], [], [['text', '/listar/libros/biblioteca']], [], [], []],
];
