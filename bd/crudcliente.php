<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$rut = (isset($_POST['rut'])) ? $_POST['rut'] : '';
$numero_verificador = (isset($_POST['numero_verificador'])) ? $_POST['numero_verificador'] : '';
$razon = (isset($_POST['razon'])) ? $_POST['razon'] : '';
$giro = (isset($_POST['giro'])) ? $_POST['giro'] : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
$ciudad = (isset($_POST['ciudad'])) ? $_POST['ciudad'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$cliente_id = (isset($_POST['cliente_id'])) ? $_POST['cliente_id'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO clientes (rut, numero_verificador, razon, giro, direccion, ciudad) VALUES('$rut', '$numero_verificador',  '$razon', '$giro', '$direccion', '$ciudad') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM clientes ORDER BY cliente_id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE clientes SET rut='$rut', numero_verificador='$numero_verificador', razon='$razon', giro='$giro', direccion='$direccion', ciudad='$ciudad' WHERE cliente_id='$cliente_id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM clientes WHERE cliente_id='$cliente_id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM clientes WHERE cliente_id='$cliente_id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM clientes";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;