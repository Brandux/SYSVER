
//script para guardar
$('#addCate').click(function() {
    vacios = validarFormVacio('fromFil');
    if (vacios > 0) {
        swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
        return false;
    }
    datos = $('#fromFil').serialize();
    $.ajax({
        type: "POST",
        data: datos,
        url: "../controller/Filial/agregarFilial.php",
        success: function(r) {
            if (r == 1) {
                $('#guardar').modal('hide');
                swal("Registrado correctamente!", "Da clic en el boton Ok!", "success");
                location.reload();
            } else {
                swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
            }
        }
    });
});

// para editar 
function editar(idFilial, nombre, cell , ruc) {
    $("#idfilial").val(idFilial);
    $("#filial_edit").val(nombre);
    $("#celular_edit").val(cell);
    $("#ruc_edit").val(ruc);
}

$('#btnEditCategoria').click(function() {
    vacios = validarFormVacio('editformCategoria');
    if (vacios > 0) {
        swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
        return false;
    }
    datos = $('#editformCategoria').serialize();
    $.ajax({
        type: "POST",
        data: datos,
        url: "../controller/Filial/editFilial.php",
        success: function(r) {
            if (r == 1) {
                swal("Editado correctamente!", "Da clic en el boton Ok!", "success");
                location.reload();
            } else {
                swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
            }
        }
    });
});

// Funcion para eliminar
function eliminar(id) {
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
            data: "idfilial=" + id,
            url: "../controller/Filial/deleteFilial.php",
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
    