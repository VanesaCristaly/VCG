<?php
// Vanesa Cid Garcia
// Computación en el Servidor Web
// Laboratorio #1: Manejo de datos en el servidor e interacción con el cliente mediante una aplicación web
// Profesor OCTAVIO AGUIRRE LOZANO
// Base de datos en MySQL
// base de datos para tienda
// Todo esta lógica hara el papel de un FrontController
class Producto
{
	private $pdo;
    
    public $id;
    public $Nombre;
    public $Costo;
    public $Tipo;
    public $FechaRegistro;
    public $FechaCaducidad;
    public $Foto;
    public $Marca;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM productos");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM productos WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM productos WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE productos SET 
						Nombre          = ?, 
						Costo        = ?,
                        Marca        = ?,
						Tipo            = ?, 
						FechaVencimiento = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre, 
                        $data->Marca,
                        $data->Costo,
                        $data->Tipo,
                        $data->FechaVencimiento,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Producto $data)
	{
		try 
		{
		$sql = "INSERT INTO productos (Nombre,Marca,Costo,Tipo,FechaVencimiento,FechaRegistro) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nombre,
                    $data->Marca, 
                    $data->Costo, 
                    $data->Tipo,
                    $data->FechaVencimiento,
                    date('Y-m-d')
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}