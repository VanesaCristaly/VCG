<?php
require_once 'model/database.php';

$controller = 'producto';
// Vanesa Cid Garcia
// Computación en el Servidor Web
// Laboratorio #1: Manejo de datos en el servidor e interacción con el cliente mediante una aplicación web
// Colapsar subforo de discusiónOCTAVIO AGUIRRE LOZANO
// Profesor OCTAVIO AGUIRRE LOZANO
// Base de datos en MySQL
// base de datos para tienda
// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    // Controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciar el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // accion
    call_user_func( array( $controller, $accion ) );
}