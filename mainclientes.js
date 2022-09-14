$(document).ready(function() {
var cliente_id, opcion;
opcion = 4;
    
tablaClientes = $('#tablaClientes').DataTable({  
    "ajax":{            
        "url": "bd/crudcliente.php", 
        "method": 'POST', //usamos el metodo POST
        "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
        "dataSrc":""
    },
    "columns":[
        {"data": "cliente_id"},
        {"data": "rut"},
        {"data": "numero_verificador"},
        {"data": "razon"},
        {"data": "giro"},
        {"data": "direccion"},
        {"data": "ciudad"},
        {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm '><i class='material-icons'>add</i></button></div></div>"}
    ]
});     


var fila; //captura la fila, para editar o eliminar
//submit para el Alta y Actualización
$('#formClientes2').submit(function(e){                         
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    rut = $.trim($('#rut').val());    
    numero_verificador = $.trim($('#numero_verificador').val());
    razon = $.trim($('#razon').val());    
    giro = $.trim($('#giro').val());    
    direccion = $.trim($('#direccion').val());
    ciudad = $.trim($('#ciudad').val());                            
        $.ajax({
          url: "bd/crudcliente.php",
          type: "POST",
          datatype:"json",    
          data:  {cliente_id:cliente_id, rut:rut, numero_verificador:numero_verificador, razon:razon, giro:giro, direccion:direccion ,ciudad:ciudad ,opcion:opcion},    
          success: function(data) {
            tablaClientes.ajax.reload(null, false);
           }
        });			        
    $('#modalCliente2').modal('hide');											     			
});



//para limpiar los campos antes de dar de Alta una Persona
$("#btnCliente2").click(function(){
    opcion = 1; //alta           
    cliente_id=null;
    $("#formUsuarios2").trigger("reset");
    $(".modal-header").css( "background-color", "#17a2b8");
    $(".modal-header").css( "color", "white" );
    $(".modal-title").text("Agregar cliente");
    $('#modalCliente2').modal('show');	    
});
     
});    