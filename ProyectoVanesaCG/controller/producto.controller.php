<?php
// Vanesa Cid Garcia
// Computación en el Servidor Web
// Laboratorio #1: Manejo de datos en el servidor e interacción con el cliente mediante una aplicación web
// Profesor OCTAVIO AGUIRRE LOZANO
// Base de datos en MySQL
// base de datos para tienda
// Todo esta lógica hara el papel de un FrontController
require_once 'model/producto.php';

class ProductoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Producto();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/producto/producto.php';
        require_once 'view/footer.php';
    }
    
    public function Crud(){
        $alm = new Producto();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/producto/producto-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $alm = new Producto();
        
        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Costo = $_REQUEST['Costo'];
        $alm->Marca = $_REQUEST['Marca'];
        $alm->Tipo = $_REQUEST['Tipo'];
        $alm->FechaVencimiento = $_REQUEST['FechaVencimiento'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}