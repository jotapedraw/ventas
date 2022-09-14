<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$username = (isset($_POST['username'])) ? $_POST['username'] : '';
$first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : '';
$last_name = (isset($_POST['last_name'])) ? $_POST['last_name'] : '';
$gender = (isset($_POST['gender'])) ? $_POST['gender'] : '';
$password = (isset($_POST['password'])) ? $_POST['password'] : '';
$status = (isset($_POST['status'])) ? $_POST['status'] : '';

$rut = (isset($_POST['rut'])) ? $_POST['rut'] : '';
$numero_verificador = (isset($_POST['numero_verificador'])) ? $_POST['numero_verificador'] : '';
$razon = (isset($_POST['razon'])) ? $_POST['razon'] : '';
$giro = (isset($_POST['giro'])) ? $_POST['giro'] : '';
$direccion = (isset($_POST['direccion'])) ? $_POST['direccion'] : '';
$ciudad = (isset($_POST['ciudad'])) ? $_POST['ciudad'] : '';


$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$user_id = (isset($_POST['user_id'])) ? $_POST['user_id'] : '';
$cliente_id = (isset($_POST['cliente_id'])) ? $_POST['cliente_id'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO inventario (username, first_name, last_name, gender, password, status) VALUES('$username', '$first_name', '$last_name', '$gender', '$password', '$status') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM inventario ORDER BY user_id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    
    case 2:        
        $consulta = "UPDATE inventario SET username='$username', first_name='$first_name', last_name='$last_name', gender='$gender', password='$password', status='$status' WHERE user_id='$user_id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        
        $consulta = "SELECT * FROM inventario WHERE user_id='$user_id' ";       
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:        
        $consulta = "DELETE FROM inventario WHERE user_id='$user_id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;
    case 4:    
        $consulta = "SELECT * FROM inventario";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 5:
        $consulta = "INSERT INTO clientes (rut, numero_verificador, razon, giro, direccion, ciudad) VALUES('$rut', '$numero_verificador',  '$razon', '$giro', '$direccion', '$ciudad') ";			
        $resultado = $conexion->prepare($consulta);
        $resultado->execute(); 
        
        $consulta = "SELECT * FROM clientes ORDER BY cliente_id DESC LIMIT 1";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);       
        break;    


}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;