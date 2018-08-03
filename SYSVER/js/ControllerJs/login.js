$(document).ready(function() {
    //script para evento click y ajax 
    $('#entrar').click(function() {
        vacios = validarFormVacio('frmLogin');
        if (vacios > 0) {
            swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
            return false;
        }
        datos = $('#frmLogin').serialize();
        console.log(datos);
        $.ajax({
            type: "POST",
            data: datos,
            url: "controller/RegLogin/login.php",
            success: function(r) {
                console.log(r);
                if (r == 1) {
                    window.location = "Vistas/index.php";
                } else {
                    swal("UPS!! Escriba bien sus credenciales de acceso", "Da clic en el boton Ok!", "info");
                }
            }
        });
    });
});