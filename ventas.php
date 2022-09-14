<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>DataTables</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
    <link rel="stylesheet" href="assets/style-general.css">
    <link rel="stylesheet" href="assets/style-home.css">
    <link rel="stylesheet" href="assets/style-table.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>  
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">    
      
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">  
  </head>
    
  <body>
  <header>
        <div class="logo"><img src="img/logo3.png" alt=""></div>
        <div class="menu_bar">
            <img src="img/menu.png" alt="">
        </div>
        <h3 class='text-center'></h3>
        <!--<a href="index.html">Salir</a>-->
  </header>
    <div class="contenedor">
        
    </div>
   
    <div class="menu">
        <nav>
            <a class="deplieguenav" href="#"><img src="img/billete.png" alt=""> Ventas <img class="flecha" src="img/expand.png" alt=""></a>
            <a href="index.php"><img src="img/invent.png" alt=""> Inventario</a>
            <a href="atajobox.php"><img src="img/productos.png" alt=""> Atajo box</a>
        </nav>
    </div>
    <div class="despliegue-caja">
        <a href="ventas.php">Panel Caja</a>
        <a href="informes.php">Informes</a>
        <a href="clientes.php">Clientes</a>
    </div>
    <div class="despliegue-herramientas">
        <a href="#">Presupuestos</a>
        <a href="#">Calculadora</a>
        <a href="#">Proveedores</a>
        <a href="#">Rendición IVA</a>     
    </div>    
  

    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaVenta" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Detalle</th>                                                           
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Referencia</th>
                            <th>Ref2</th>  
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>                           
                    </tbody>        
                </table>               
            </div>
            </div>
        </div>  
    </div>

<!-- CONTAINER CAJA -->

<div class="container-centrar-columnapanel">
    <div class="container-panel">
        <table class="table-venta">
            <tr>
                <th>Item</th>
                <th>Cant.</th>
                <th class="table-precio">Precio</th>
            </tr>
            <tr>
                <td id="table-i"></td>
                <td id="table-c"></td>
                <td id="table-p"></td>
            </tr>
        </table>
            <table class="container-total">
                <tr>
                    <td></td>
                    <td><p>Total</p> </td> 
                    <td><p>0</p></td>                       
                </tr>
                <tr> 
                    <td></td>                       
                    <td><p>IVA</p></td>
                    <td><p>0</p></td>
                </tr>
                <tr>                   
                    <td><input type="number" name="" id=""></td>
                    <td><p>Descuento</p></td>     
                    <td><p>0</p></td>
                </tr>
                <tr>
                    
                    <td></td>
                    <td><p>Total final</p></td>
                    <td><p>0</p></td>
                </tr>
            </table>            
        <form action="" method="POST">
            <table id="dynamic_field">
                <tr>
                    <td>
                        <strong>DATOS DOCUMENTO</strong>
                    </td>
                </tr>
                <tr>
                    
                    <td><p>Tipo de documento</p></td>
                    <td><p>Nombre de vendedor</p></td>
                    <td><p>Forma de pago</p></td>
                    <td></td>
                </tr>                
                <tr >
                    <td>
                        <select name="lista1" id="lista1">                        
                            <option value="">Cotización</option>
                            <option value="">Boleta</option>
                            <option value="">Factura</option>
                            <option value="">Nota de crédito</option>
                        </select>
                    </td>
                    <td>
                        <select name="lista1" id="lista1">
                            <option value="Nelson">Nelson</option>
                        </select>
                    </td>  
                    <td>
                        <select name="lista1" id="lista1">.
                            <option value="Nelson">---</option>
                            <option value="Nelson">Crédito</option>
                            <option value="Nelson">Crédito Abono</option>
                            <option value="Nelson">Débito</option>
                            <option value="Nelson">Débito Abono</option>
                            <option value="Nelson">Efectivo</option>
                            <option value="Nelson">Efectivo Abono</option>
                            <option value="Nelson">Transferencia</option>
                            <option value="Nelson">Transferencia Abono</option>
                        </select>
                    </td><!--   
                    <td>
                        <button type="button" name="add" id="add" value="">
                            <img src="img/añadir.png" alt=""> 
                            Añadir 
                        </button>
                    </td> -->
                </tr> 
                
                <tr class="datos-clientes">
                    <td>
                        <strong>DATOS CLIENTE</strong>
                    </td>
                    <td>
                        <button id="btnBuscarCl" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">search</i>Buscar</button>
    
                    </td>
                    <td>                        
                        <button id="btnCliente" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">add</i>Agregar cliente</button>    
                    </td>
                </tr>
                <tr>   
                    <td><p>R.U.T.</p></td>
                    <td></td>

                </tr>
                <tr>
                    <td><input type="text" name="" id=""></td>
                    <td><input type="number" name="" id=""></td>
                </tr>
                <tr>
                    <td><p>Nombre/Empresa</p></td>
                    <td><p>Giro</p></td>
                    <td><p>Dirección</p></td>
                </tr>
                <tr>       
                    <td><input type="text" name="" id=""></td>
                    <td><input type="text" name="" id=""></td>
                    <td><input type="text" name="" id=""></td>
                </tr>
            </table>                   
        </form>
        <button class="compra">Efectuar documento</button>


    </div>
</div>
<!-- /CONTAINER CAJA -->
<div class="container" id="btn-add">
</div>    
    <br>  
<!--Modal para busqueda cliente
<div class="modal fade" id="modalBuscarCl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formBuscarCl" action="post" autocomplete="off">    
                <div class="modal-body">
                    <div class="container caja">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="table-responsive">        
                                <table id="tablaClientes" class="table" style="width:100%" >
                                    <thead class="text-center">
                                        <tr>
                                            <th>R.U.T.</th>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>                           
                                    </tbody>        
                                </table>               
                            </div>
                        </div>
                    </div>  
                </div>                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                 <button type="" id="btnAutocompletar" class="btn btn-dark">Llenar datos</button>
                </div>
            </form>    
        </div>
    </div>
</div>  -->

<!--Modal para añadir cliente-->
<div class="modal fade" id="modalCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formClientes">    
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                    <div class="form-group">
                    <label for="" class="col-form-label">R.U.T</label>
                    <input type="number" class="form-control" id="rut">
                    </div>
                    </div>
                    <div class="col-lg-2">
                    <div class="form-group">
                    <label for="" class="col-form-label">*</label>
                    <input type="text" class="form-control" id="numero_verificador">
                    </div> 
                    </div>    
                </div>
                <div class="row"> 
                    <div class="col-lg-7">
                    <div class="form-group">
                    <label for="" class="col-form-label">Razón empresa</label>
                    <input type="text" class="form-control" id="razon">
                    </div>               
                    </div>
                    <div class="col-lg-5">
                    <div class="form-group">
                    <label for="" class="col-form-label">Giro</label>
                    <input type="text" class="form-control" id="giro">
                    </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="form-group">
                        <label for="" class="col-form-label">Dirección</label>
                        <input type="text" class="form-control" id="direccion">
                        </div>
                    </div>    
                    <div class="col-lg-4">    
                        <div class="form-group">
                        <label for="" class="col-form-label">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad">
                        </div>            
                    </div>    
                </div>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>    
        </div>
    </div>
</div>  
<?php    
include_once('footer.php');
?>

