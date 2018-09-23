<?php
session_start();
if(isset($_SESSION['usuario'])){
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <?php Include("../includes/head.php"); ?>
    </head>
    <body class="theme-red">
    <!-- Page Loader -->
    <?php Include("../includes/loader.php"); ?>
    <!--/page Loader php-->
    <!--Heard php-->
    <?php Include("../includes/header.php"); ?>
    <!-- / Heard php-->
    <!--Nav Bar-->
    <?php Include("../includes/navBar.php"); ?>
    <!-- / Nav Bar-->

    <!--Area de Conenido-->
    <section class="content">
        <div class="container-fluid">
            <!-- CPU Usage -->
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1 class="text-center">Formulario de Registro de Trabajadores</h1>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a onclick="limpiarFormularioRegistro()">Limpiar Registro</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Inicio de Formulario de registro-->
                            <form id="regTrab" method="POST">
                                <!--Nombre Open-->
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="nombre" type="text" name="name" class="form-control" required>
                                        <label class="form-label">Nombre Completo*</label>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                                        <div class="form-group form-float ">
                                            <div class="form-line">
                                                <input id="dni" type="number" name="dni" class="form-control" required>
                                                <label class="form-label">Documento de Identidad*</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                        <div class="form-group form-float">
                                            <div class="input-field">
                                                <select id="tipo_doc" class="select-dropdown" name="reg_tipo_dni">
                                                    <option value="" disabled>Tipo de documento</option>
                                                    <option value="1">DNI</option>
                                                    <option value="2">Pasaporte</option>
                                                    <option value="3">RUC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="correo" type="email" name="email" class="form-control" required>
                                        <label class="form-label">Email*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select id="tipo_work" class="form-control show-tick">
                                            <option value="" disabled selected>Tipo de trabajador</option>
                                            <option value="1">Practicante</option>
                                            <option value="2">Normal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="fecha_ini" type="text" class="datepicker form-control"
                                               placeholder="Fecha inicio...">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="fecha_fin" type="text" class="datepicker form-control" placeholder="Fecha fin...">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select id="horario" class="form-control show-tick">
                                            <option value="" disabled selected>Tipo de horario</option>
                                            <option value="1">Mañana</option>
                                            <option value="2">Tarde</option>
                                            <option value="3">Dia Completo</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="sueldo" min="50" type="number" name="sueldo" class="form-control" required>
                                        <label class="form-label">Salario*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="celular" type="number" name="celular" class="form-control" required>
                                        <label class="form-label">Celular*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="edad" min="18" type="number" name="age" class="form-control">
                                        <label class="form-label">Edad*</label>
                                    </div>
                                    <div class="help-info">Se recomienda que sea mayor de 18 años</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select id="horario" class="form-control show-tick">
                                            <option value="" disabled selected>Filial</option>
                                            <option value="1">Vernie</option>
                                        </select>
                                    </div>
                                </div>


                                <button id="enviar" class="btn btn-success waves-effect" type="button">Registrar nuevo trabajador</button>
                            </form>
                            <!-- Fin de Formulario de registro-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
            <!-- #END# CPU Usage -->

        </div>
    </section>
    <!--Fin de area de contenido-->

    <!-- Archivos Javascript -->
    <?php Include("../includes/jsGeneral.php"); ?>
    </body>
    <script>
        $(document).ready(function(){
            $('#enviar').click(function(){
                if(validarFormVacio('regTrab')>0){
                    alert("completa los campos");
                    return false;
                }else{
                    $.ajax('../controller/Trabajador/Trabajador.php',{
                        data:{
                            idfilial:$('#ponerID').val(),
                            nombre:$('#nombre').val(),
                            dni:$('#dni').val(),
                            email:$('#correo').val(),
                            cel:$('#celular').val(),
                            tipoWorker:$('#tipo_work').val(),
                            fechaIni:$('#fecha_ini').val(),
                            fechaFin:$('#fecha_fin').val(),
                            salario:$('#sueldo').val(),
                            edad:$('#edad').val(),
                            horario:$('#horario').val(),
                            diasLab:$('#ponerID').val(),
                            horas:$('#ponerID').val()
                        },
                        type:'POST',
                        success:function(obj){
                            if(obj==true){
                                Guardar();
                            }
                        }
                    });
                }
            });
        });
        function Guardar() {
            swal("Excelente!", "Hemos registrado un nuevo trabajador!", "success");
        }


//Formatea los datepicker a formato de la base de dato
$('#fecha_fin').bootstrapMaterialDatePicker({ lang: 'es', weekStart: 0, time: false, cancelText: 'Cancelar', okText: 'Definir' });
$('#fecha_ini').bootstrapMaterialDatePicker({ lang: 'es', weekStart: 0, time: false, cancelText: 'Cancelar', okText: 'Definir' }).on('change', function(e, date) {
    $('#fecha_fin').bootstrapMaterialDatePicker('setMinDate', date);
});
    </script>
    </html>
    <?php
}else{
    header("location:../login.php");
}
?>