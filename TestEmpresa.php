<?php

include_once 'Cliente.php';
include_once 'Empresa.php';
include_once 'Venta.php';
include_once 'Moto.php';

$objCliente1 = new Cliente("Cecilia","Rodriguez",false,"DNI","34811057");
$objCliente2 = new Cliente("Rocio","Perez",false,"DNI","32564852");

$objMoto1 = new Moto(11,2230000,2022,"Benelli Imperiale 400",85,true,10);
$objMoto2 = new Moto(12,584000,2021,"Zanella Zr 150 Ohc",70,true,10);
$objMoto3 = new Moto(13,999900,2023,"Zanella Patagonian Eagle 250",55,false,null);

$colMotos = [$objMoto11,$objMoto12,$objMoto13,$objMoto14];
$colClientes = [$objCliente1,$objCliente1];
$colVenta = [];

$empresa = new Empresa("Alta Gama","Av Argentina 123",$colMotos,$colClientes,$colVenta);

/**Invocar al método registrarVenta($colCodigosMoto, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [11,12,13]. Visualizar el resultado obtenido. */
$colCodigosMoto = [11,12,13];
$registrarVenta1 = $empresa->registrarVenta($colCodigosMoto,$objCliente2);

/**Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [0]. Visualizar el resultado obtenido. */
$colCodigosMoto = [0];
$registrarVenta1 = $empresa->registrarVenta($colCodigosMoto,$objCliente2);

/**Invocar al método registrarVenta($colCodigosMotos, $objCliente) de la Clase Empresa donde el
$objCliente es una referencia a la clase Cliente almacenada en la variable $objCliente2 (creada en el
punto 1) y la colección de códigos de motos es la siguiente [2]. Visualizar el resultado obtenido. */
$colCodigosMoto = [2];
$registrarVenta1 = $empresa->registrarVenta($colCodigosMoto,$objCliente2);

/**Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
corresponden con el tipo y número de documento del $objCliente1. */
$empresa->retornarVentasXCliente("DNI","34811057");

/**Invocar al método retornarVentasXCliente($tipo,$numDoc) donde el tipo y número de documento se
corresponden con el tipo y número de documento del $objCliente2 */
$empresa->retornarVentasXCliente("DNI","32564852");

/**Realizar un echo de la variable Empresa creada en 2. */
echo $empresa;

?>