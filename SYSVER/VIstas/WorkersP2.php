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
                                        <input id="nombre" type="text" name="nombre" class="form-control" required>
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
                                                <select id="tipo_doc" class="select-dropdown" name="tipo_doc">
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
                                        <input id="correo" type="email" name="correo" class="form-control" required>
                                        <label class="form-label">Email*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select id="tipo_work" name="tipo_work" class="form-control show-tick">
                                            <option value="" disabled selected>Tipo de trabajador</option>
                                            <option value="1">Practicante</option>
                                            <option value="2">Normal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="fecha_ini" name="fecha_ini" type="text" class="datepicker form-control"
                                               placeholder="Fecha inicio...">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input id="fecha_fin" name="fecha_fin" type="text" class="datepicker form-control" placeholder="Fecha fin...">
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select id="horario" name="horario" class="form-control show-tick">
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
                                        <input id="edad" min="18" type="number" name="edad" class="form-control">
                                        <label class="form-label">Edad*</label>
                                    </div>
                                    <div class="help-info">Se recomienda que sea mayor de 18 años</div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <select id="filial" name="filial" class="form-control show-tick">
                                        <?php
                                            $link = mysqli_connect('173.236.82.180', 'verniearchitect_vertec', 'pass//2018','verniearchitect_db');
                                            $sql ="SELECT idFilial, Nombre FROM filial WHERE ESTADO  = 1 ";
                                            $resul= mysqli_query($link,$sql);
                                            while ($ver= mysqli_fetch_row($resul)):?>
                                            <option value="<?php echo $ver[0]?>"  selected><?php echo $ver[1]?></option>
                                            <?php endwhile;?>
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
	<script src="../js/ControllerJs/Worker2.js"></script>
    </body>
    </html>
    <?php
}else{
    header("location:../login.php");
}
?>