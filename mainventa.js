$(document).ready(function() {
var user_id, opcion, opcioncliente;
opcion = 4;
opcioncliente = 6;
    
    tablaVenta = $('#tablaVenta').DataTable({  
        "ajax":{            
            "url": "bd/crud.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            {"data": "user_id"},
            {"data": "username"},
            {"data": "first_name"},
            {"data": "last_name"},
            {"data": "gender"},
            {"data": "password"},
            {"data": "status"},
            {"defaultContent": "<div class='centrar-btn'><button id='btn-ventas' class='btn-venta'><i class='material-icons'>add_circle</i></button></div>"}
        ]
    });   
    
    $('#btn-ventas').on('click',function(e){
        $('#table-i')
        $('#table-c').html("<input type='number' id=''>")
        $('#table-p')
    });
    
    var fila; //captura la fila, para editar o eliminar
    //submit para el Alta y Actualización
    $('#formClientes').submit(function(e){                         
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        rut = $.trim($('#rut').val());    
        numero_verificador = $.trim($('#numero_verificador').val());
        razon = $.trim($('#razon').val());    
        giro = $.trim($('#giro').val());    
        direccion = $.trim($('#direccion').val());
        ciudad = $.trim($('#ciudad').val());                 
            $.ajax({
              url: "bd/crud.php",
              type: "POST",
              datatype:"json",    
              data:  {cliente_id:cliente_id, rut:rut, numero_verificador:numero_verificador, razon:razon, giro:giro, direccion:direccion ,ciudad:ciudad ,opcion:opcion},    
              success: function(data) {
                tablaClientes.ajax.reload(null, false);
               }
            });			        
        $('#modalCliente').modal('hide');											     			
    });

//para limpiar los campos antes de dar de Alta una Persona
$("#btnCliente").click(function(){
    opcion = 5; //alta           
    cliente_id=null;
    $("#formUsuarios").trigger("reset");
    $(".modal-header").css( "background-color", "#17a2b8");
    $(".modal-header").css( "color", "white" );
    $(".modal-title").text("Agregar cliente");
    $('#modalCliente').modal('show');	    
}); 
        
});    