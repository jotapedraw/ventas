<?php    
include_once('header.php');
?>

    <div class="container" id="btn-add">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnCliente2" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>    
            </div>    
        </div>    
    </div>    
    <br>  
    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">        
                <table id="tablaClientes" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>ID</th>
                            <th>R.U.T.</th>
                            <th>#</th>
                            <th>Razón</th>                                                           
                            <th>Giro</th>
                            <th>Dirección</th>
                            <th>Ciudad</th>           
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

<!--Modal para añadir cliente-->
<div class="modal fade" id="modalCliente2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formClientes2">    
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
