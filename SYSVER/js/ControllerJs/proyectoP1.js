$("#add").click(function() {
    location.href = "http://sysver.verniearchitect.com/VIstas/ProyectosP2.php";
});

// para editar 
function editarCliente(idCon, idProy, proyecto, finPro, Cost, es_suel, estado) {
    $("#idContr").val(idCon);
    $("#idPro").val(idProy);
    $("#nom_edit_proyex").val(proyecto);
    $("#edit_finpro").val(finPro);
    $("#edit_Costo").val(Cost);
    $("#provincia option[value="+ valor +"]").attr("selected",true);
    $("#edit_Es_suelo option[value="+es_suel+"]").attr("selected",true);
    $("#edit_estado option[value="+estado+"]").attr("selected",true);
}

$('#editarProyecto').click(function() {
    vacios = validarFormVacio('editformPoryecto');
    if (vacios > 0) {
        swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
        return false;
    }
    datos = $('#editformPoryecto').serialize();
    console.log(datos);
    $.ajax({
        type: "POST",
        data: datos,
        url: "../controller/Proyecto/editProyecto.php",
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
$('#edit_finpro').bootstrapMaterialDatePicker({ weekStart : 0, time: false });