<title>Computación en el Servidor Web</title></html > <body style="background-color: hotpink;" align="center"> 
	<H1 align="center"><strong>Desarrollo web avanzado</strong></H1> 
	<p align="center"><strong>Vanesa Cid Garcia </strong></p> 
    <p align="center"><strong>Octavio Aguirre Lozano</strong></p> 
    <p align="center"><strong>Bienvenido</strong></p> 
    <p align="center"><strong>04 de diciembre 2020</strong></p> 
    <br>
    <br>
<?php 
//Clase Usuario para Saludo a usuarios
class AccesoUsuario 
{ 
    
    public $nombre,
     $contraseña;
     function __construct($nombre, $contraseña) 
     {
      $this -> nombre = $nombre;
      $this -> contraseña = $contraseña;
     } 
     
     function Bienvenida()
      { 
        echo "Bienvenida a la pagina web de compras : ". $this -> nombre;
     } 
} 
      //Se obtiene los valores del formulario, usuario y contraseña, por el momento no valida que el usuario se correcto, solo formato y da la bienvenida
       $usringresa =$_POST["nmusr"];
       $contra =$_POST["cont"];
       //Valida que el nombre de usuario muestre un nombre con formato correcto 
       $usuario = new AccesoUsuario( ucfirst(strtolower($usringresa)), $contra); 
        print_r($usuario); 
        echo "<br>"; 
        echo $usuario -> nombre;
        echo "<br>";
        $usuario->Bienvenida();
        echo "<br>";
        
        ?>

	<form action="inicio.html" method="post" align="center">
    <br><button type="submit">Iniciar Compra</button>
	
	</form>
	
</body> </html>


