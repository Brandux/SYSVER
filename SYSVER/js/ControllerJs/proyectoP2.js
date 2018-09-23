function Guardar() {
    swal("Good job!", "You clicked the button!", "success");
}

$("#cancel").click(function() {
    location.href = "http://sysver.verniearchitect.com/VIstas/ProyectosP1.php";
});

//script para guardar
$('#btnProyecto').click(function() {
    vacios = validarFormVacio('regisProyecto');
    if (vacios > 0) {
        swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
        return false;
    }
    datos = $('#regisProyecto').serialize();
    console.log(datos);
    $.ajax({
        type: "POST",
        data: datos,
        url: "../controller/Proyecto/agregarProyecto.php",
        success: function(r) {
            console.log(r);
            if (r == 1) {
                swal("Registrado correctamente!", "Da clic en el boton Ok!", "success");
                location.href = "http://sysver.verniearchitect.com/VIstas/ProyectosP1.php";
            } else {
                swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
            }
        }
    });
});

//Formatea los datepicker a formato de la base de dato
$('#fecha_fin').bootstrapMaterialDatePicker({ lang: 'es', weekStart: 0, time: false, cancelText: 'Cancelar', okText: 'Definir' });
$('#fecha_ini').bootstrapMaterialDatePicker({ lang: 'es', weekStart: 0, time: false, cancelText: 'Cancelar', okText: 'Definir' }).on('change', function(e, date) {
    $('#fecha_fin').bootstrapMaterialDatePicker('setMinDate', date);
});