<?php    
include_once('header.php');
?>
    <div class="container" id="btn-add">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>    
            </div>    
        </div>    
    </div>    
    <br>  
    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%" >
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

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
        </div>
    <form id="formUsuarios">    
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-4">
                <div class="form-group">
                <label for="" class="col-form-label">Código*</label>
                <input type="text" class="form-control" id="username">
                </div>
                </div>
                <div class="col-lg-8">
                <div class="form-group">
                <label for="" class="col-form-label">Detalle*</label>
                <input type="text" class="form-control" id="first_name">
                </div> 
                </div>    
            </div>
            <div class="row"> 
                <div class="col-lg-7">
                <div class="form-group">
                <label for="" class="col-form-label">Precio</label>
                <input type="number" class="form-control" id="last_name">
                </div>               
                </div>
                <div class="col-lg-5">
                <div class="form-group">
                <label for="" class="col-form-label">Stock</label>
                <input type="number" class="form-control" id="gender">
                </div>
                </div>  
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Referencia</label>
                    <input type="text" class="form-control" id="password">
                    </div>
                </div>    
                <div class="col-lg-6">    
                    <div class="form-group">
                    <label for="" class="col-form-label">Referencia 2</label>
                    <input type="text" class="form-control" id="status">
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
