//script para guardar
$('#regCliente').click(function() {
    vacios = validarFormVacio('formCliente');
    if (vacios > 0) {
        swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
        return false;
    }
    datos = $('#formCliente').serialize();
    console.log(datos);
    $.ajax({
        type: "POST",
        data: datos,
        url: "../controller/Cliente/agregarCliente.php",
        success: function(r) {
            console.log(r);
            if (r == 1) {
                $('#addCliente').modal('hide');
                swal("Registrado correctamente!", "Da clic en el boton Ok!", "success");
                location.reload();
            } else {
                swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
            }
        }
    });
});

// para editar 
function editarCliente(id, tipo_doc, num, cell, tel, email) {
    $("#idCliente").val(id);
    $("#doc_identidad").text(tipo_doc);
    $("#Num_Doc").val(num);
    $("#celu").val(cell);
    $("#gmail").val(email);
    $("#fono").val(tel);
}

$('#actualizarCliente').click(function() {
    vacios = validarFormVacio('editCliente');
    if (vacios > 0) {
        swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
        return false;
    }
    datos = $('#editCliente').serialize();
    console.log(datos);
    $.ajax({
        type: "POST",
        data: datos,
        url: "../controller/Cliente/editCliente.php",
        success: function(r) {
            console.log(r);
            if (r == 1) {
                swal("Editado correctamente!", "Da clic en el boton Ok!", "success");
                location.reload();
            } else {
                swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
            }
        }
    });
});
//script para eliminar
function eliminarCliente(id) {
    swal({
        title: " Deseas eliminar?",
        text: "Estos datos se perderan pernanentemente..!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, obviamente!",
        closeOnConfirm: false
    }, function() {
        $.ajax({
            type: "POST",
            data: "idcliente=" + id,
            url: "../controller/Cliente/deleteCliente.php",
            success: function(r) {
                console.log(r);
                if (r == 1) {
                    swal("Eliminado correctamente!", "Da clic en el boton Ok!", "success");
                    location.reload();
                } else {
                    swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
                }
            }
        });
        swal("Editado correctamente!", "Da clic en el boton Ok!", "success");
    });
}