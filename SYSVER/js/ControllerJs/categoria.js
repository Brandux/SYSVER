$(document).ready(function() {});
//script para guardar
$('#addCate').click(function() {
    vacios = validarFormVacio('fromCat');
    if (vacios > 0) {
        swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
        return false;
    }
    datos = $('#fromCat').serialize();
    console.log(datos);
    $.ajax({
        type: "POST",
        data: datos,
        url: "../controller/Categoria/agregarCategoria.php",
        success: function(r) {
            console.log(r);
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
function editar(idCategoria, categoria) {
    $("#idCategoria").val(idCategoria);
    $("#categoriaU").val(categoria);
    //swal("Problemas.. Intentelo nuevamente!" + id, "Da clic en el boton Ok!", "info");
}

$('#btnEditCategoria').click(function() {
    vacios = validarFormVacio('editCategoria');
    if (vacios > 0) {
        swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
        return false;
    }
    datos = $('#editCategoria').serialize();
    console.log(datos);
    $.ajax({
        type: "POST",
        data: datos,
        url: "../controller/Categoria/editCategoria.php",
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
            data: "idCate=" + id,
            url: "../controller/Categoria/deleteCategoria.php",
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