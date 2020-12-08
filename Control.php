<title>Computación en el Servidor Web</title></html > <body style="background-color: hotpink;" align="center"> 
	<H1 align="center"><strong>Desarrollo web avanzado</strong></H1> 
	<p align="center"><strong>Vanesa Cid Garcia </strong></p> 
    <p align="center"><strong>Octavio Aguirre Lozano</strong></p> 
    <p align="center"><strong>Resultados</strong></p> 
    <p align="center"><strong>04 de diciembre 2020</strong></p> 
    <br>
    <br>
<?php
$TotalesBebidas=0;
$TotalesDulces=0;
$TotalesPan=0;
$count=0;

//Obtenemos el array de las bebidas seleccionadas
if ( !empty($_GET["bebidas"]) && is_array($_GET["bebidas"]) ) { 
 //las bebidas seleccionadas se guardaran en una lista
    echo "<ul>";
    //Para cada bebida sera necesario asignarle un precio y para ellos usaremos un Switch 
    foreach ( $_GET["bebidas"] as $bebidas ) { 

        switch ($bebidas): 
            case "Manzana":
                //Asignacion Precio de la bebida Manzana
                $precio = 19;
                //Se Agraga a lista la bebida manzana junto con su precio
                agregalista($precio, $bebidas);
                $TotalesBebidas+=$precio;
                $count+=$count;
            break;
            case "Pepsi": 
                //Asignacion Precio de la bebida Pepsi
                $precio = 10;
                //Se Agraga a lista la bebida Pepsi junto con su precio
                agregalista($precio, $bebidas);
                $TotalesBebidas+=$precio;
                $count+=$count;
            break; 
            case "Naranja": 
                //Asignacion Precio de la bebida Naranja
                $precio = 21;
               //Se Agraga a lista la bebida Naranja junto con su precio
               agregalista($precio, $bebidas);
               $TotalesBebidas+=$precio;
               $count+=$count;
             break; 
             case "Agua": 
                //Asignacion Precio de la bebida Agua
                $precio = 11;
                //Se Agraga a lista la bebida Agua junto con su precio
                agregalista($precio, $bebidas);
                $TotalesBebidas+=$precio;
                $count+=$count;
            break;
            case "Coca-cola": 
               //Asignacion Precio de la bebida Coca-cola
                $precio = 15;
                //Se Agraga a lista la bebida Coca-cola junto con su precio
                agregalista($precio, $bebidas);
                $TotalesBebidas+=$precio;
                $count+=$count;
            break;
            case "7Up": 
                //Asignacion Precio de la bebida 7Up
                $precio = 13;
                //Se Agraga a lista la bebida 7Up junto con su precio
                agregalista($precio, $bebidas);
                $TotalesBebidas+=$precio;
                $count+=$count;
            break;
            case "Tarrito": 
                //Asignacion Precio de la bebida Tarrito
                $precio = 8;
                //Se Agraga a lista la bebida Tarrito junto con su precio
                agregalista($precio, $bebidas);
                $TotalesBebidas+=$precio;
                $count+=$count;
            break;
            case "Jugos": 
                //Asignacion Precio de la bebida Jugos
                $precio = 25;
                //Se Agraga a lista la bebida Jugos junto con su precio
                agregalista($precio, $bebidas);
                $TotalesBebidas+=$precio;
                $count+=$count;
            break;
            default: 
            echo "N/A"; 
        break; 
    endswitch;
     
     }
     echo "</ul>";
}

//Obtenemos el array de los dulces seleccionados
if ( !empty($_GET["dulces"]) && is_array($_GET["dulces"]) ) { 
 //los dulces seleccionados se guardaran en una lista
    echo "<ul>";
    foreach ( $_GET["dulces"] as $dulces ) { 
//Para cada dulce sera necesario asignarle un precio y para ellos usaremos un Switch 
        switch ($dulces): 
            case "Mazapan":
                //Asignacion Precio de la dulces Mazapan
                $precio = 5;
                //Se Agraga a lista el dulce Mazapan junto con su precio
                agregalista($precio, $dulces);
                $TotalesDulces+=$precio;
                $count+=$count;
            break;
            case "Paletas": 
                //Asignacion Precio de la dulces Paletas
                $precio = 3;
                //Se Agraga a lista el dulce Paletas junto con su precio
                agregalista($precio, $dulces);
                $TotalesDulces+=$precio;
                $count+=$count;
            break; 
            case "Gomitas": 
                //Asignacion Precio de la dulces Gomitas
                $precio = 9;
                //Se Agraga a lista el dulce Gomitas junto con su precio
                agregalista($precio, $dulces);
                $TotalesDulces+=$precio;
                $count+=$count;
             break; 
             case "Chicles": 
                //Asignacion Precio de la dulces Chicles
                $precio = 11;
                //Se Agraga a lista el dulce Gomitas junto con su precio
                agregalista($precio, $dulces);
                $TotalesDulces+=$precio;
                $count+=$count;
            break;
            case "Tamarindos": 
                //Asignacion Precio de la dulces Tamarindos
                $precio = 15;
                //Se Agraga a lista el dulce Tamarindos junto con su precio
                agregalista($precio, $dulces);
                $TotalesDulces+=$precio;
                $count+=$count;
            break;
            case "Chocolates":
                //Asignacion Precio de la dulces Chocolates 
                $precio = 13;
                //Se Agraga a lista el dulce Chocolates junto con su precio
                agregalista($precio, $dulces);
                $TotalesDulces+=$precio;
                $count+=$count;
            break;
            case "Gelatinas":
                //Asignacion Precio de la dulces Gelatinas  
                $precio = 29;
                //Se Agraga a lista el dulce Gelatinas junto con su precio
                agregalista($precio, $dulces);
                $TotalesDulces+=$precio;
                $count+=$count;
            break;
            case "Dulce de leche":
                //Asignacion Precio de la dulces Dulce de leche  
                $precio = 2;
                //Se Agraga a lista el dulce Dulce de leche junto con su precio
                agregalista($precio, $dulces);
                $TotalesDulces+=$precio;
                $count+=$count;
            break;
            default: 
            echo "N/A"; 
        break; 
    endswitch;
       
     }
     echo "</ul>";
}

//Obtenemos el array del pan seleccionado
if ( !empty($_GET["pan"]) && is_array($_GET["pan"]) ) { 
   //Los guardamos en listas para presentar en pantalla
    echo "<ul>";
    foreach ( $_GET["pan"] as $pan ) { 
        switch ($pan): 
            case "Cuernitos":
                //Asignacion Precio del pan Cuernitos
                $precio = 3;
                //Se Agraga a lista pan Cuernitos junto con su precio
                agregalista($precio, $pan);
                $TotalesPan+=$precio;
                $count+=$count;
            break;
            case "Conchas": 
                //Asignacion Precio del pan Conchas
                $precio = 4;
                //Se Agraga a lista pan Conchas junto con su precio
                agregalista($precio, $pan);
                $TotalesPan+=$precio;
                $count+=$count;
            break; 
            case "Donas": 
                //Asignacion Precio de pan Donas
                $precio = 6;
               //Se Agraga a lista pan Donas junto con su precio
               agregalista($precio, $pan);
               $TotalesPan+=$precio;
               $count+=$count;
             break; 
             case "Roles glaseados": 
                //Asignacion Precio de pan Roles glaseados
                $precio = 14;
                //Se Agraga a lista pan Roles glaseados junto con su precio
                agregalista($precio, $pan);
                $TotalesPan+=$precio;
                $count+=$count;
            break;
            case "Roles Canela": 
               //Asignacion Precio de pan Roles Canela
                $precio = 16;
                //Se Agraga a lista pan Roles Canela junto con su precio
                agregalista($precio, $pan);
                $TotalesPan+=$precio;
                $count+=$count;
            break;
            case "Pan C/Nuez": 
                //Asignacion Precio de pan Pan C/Nuez
                $precio = 17;
                //Se Agraga a lista pan Pan C/Nuez junto con su precio
                agregalista($precio, $pan);
                $TotalesPan+=$precio;
                $count+=$count;
            break;
            case "Pan C/Azucar": 
                //Asignacion Precio de pan Pan C/Azucar
                $precio = 5;
                //Se Agraga a lista pan Pan C/Azucar junto con su precio
                agregalista($precio, $pan);
                $TotalesPan+=$precio;
                $count+=$count;
            break;
            case "Galletas": 
                //Asignacion Precio de pan Galletas
                $precio = 12;
                //Se Agraga a lista pan Galletas junto con su precio
                agregalista($precio, $pan);
                $TotalesPan+=$precio;
                $count+=$count;
            break;
            default: 
            echo "N/A"; 
        break; 
    endswitch;
     }
     echo "</ul>";
}


//Funcion para agregar productos a la lista

function agregalista($Precio, $Producto)
{
    echo "<li>";
    echo "El producto es " . $Producto . " el precio es " . $Precio . "<br>" ; 
    echo "</li>"; 
       
}


$sumat= $TotalesBebidas + $TotalesDulces + $TotalesPan;
echo " la suma  total es $sumat";
echo "<br/>"; 




while (++$sumat < 20)
{ 
echo "<br/>";
echo $sumat ;

} //echo "Felicidades Compraste el minimo total de pesos en producto <br />"; 


 do{
    echo "<br/>"; 
       echo $count; 
    
     }while (++$count < 2);
   //  echo "Felicidades adquiriste la cantidad minima de productos a comprar<br>";


?>
</body> </html>