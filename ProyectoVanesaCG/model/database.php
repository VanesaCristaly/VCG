<?php
// Vanesa Cid Garcia
// Computación en el Servidor Web
// Laboratorio #1: Manejo de datos en el servidor e interacción con el cliente mediante una aplicación web
// Profesor OCTAVIO AGUIRRE LOZANO
// Base de datos en MySQL
// base de datos para tienda
// Todo esta lógica hara el papel de un FrontController
class Database
{
    public static function StartUp()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=tienda;charset=utf8', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}