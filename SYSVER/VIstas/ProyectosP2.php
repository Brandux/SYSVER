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
    <?php Include("../includes/loader.php");?>
    <!--/page Loader php-->
    <!--Heard php-->
    <?php Include("../includes/header.php");?>
    <!-- / Heard php-->
    <!--Nav Bar-->
    <?php Include("../includes/navBar.php");?>
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
                            <h2>Area de registro de Contratos y proyectos</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">
                                <h3>Datos de Acceso al sistema</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="username" required>
                                            <label class="form-label">Usuario *</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password" id="password" required>
                                            <label class="form-label">Contraseña*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="confirm" required>
                                            <label class="form-label">Confirmar Contraseña*</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Información general</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" required>
                                            <label class="form-label">Nombre Completo*</label>
                                        </div>
                                    </div>                                    
                                    <div class="form-group form-float ">
                                        <div class="form-line">
                                            <input type="number" name="surname" class="form-control" required>
                                            <label class="form-label">DNI*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" name="email" class="form-control" required>
                                            <label class="form-label">Email*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <select class="form-control show-tick">
                                                <option value="">Tipo de trabajador</option>
                                                <option value="10">Practicante</option>
                                                <option value="20">Normal</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="datepicker form-control" placeholder="Fecha inicio...">
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                           <input type="text" class="datepicker form-control" placeholder="Fecha fin...">
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                           <input min="50" type="number" name="sueldo" class="form-control" required>
                                            <label class="form-label">Salario*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" name="celular" class="form-control" required>
                                            <label class="form-label">Celular*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input min="18" type="number" name="age" class="form-control" >
                                            <label class="form-label">Edad*</label>
                                        </div>
                                        <div class="help-info">Se recomienda que sea mayor de 18 años</div>
                                    </div>
                                </fieldset>
                            </form>
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
    <?php Include("../includes/jsGeneral.php");?>
</body>
<script>
    function Guardar(){
         swal("Good job!", "You clicked the button!", "success");
    }
    
</script>
</html>
<?php
    }else{
        header("../login.php");
    }
?>