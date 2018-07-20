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
                        <h2>Formulario de Registro de Trabajadores</h2>
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
                        <form id="form_advanced_validation" method="POST">
                            <!--Nombre Open-->
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="minmaxlength" maxlength="40" required>
                                    <label class="form-label">Nombre</label>
                                </div>
                                <div class="help-info">Max. 40 caracteres</div>
                            </div>
                            <!--Nombre Close-->
                            <!--DNI Open-->
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="minmaxlength" required>
                                    <label class="form-label">Docimento de identidad</label>
                                </div>
                                <div class="help-info">Min. 6, Max. 10 characters</div>
                            </div>
                            <!--DNI Close-->
                            <!--Filial Open-->
                            <div class="form-group form-float">
                                <div class="input-field s1">
                                    <select>
                                        <option value="" disabled selected>Choose your option</option>
                                        <option value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                        <option value="3">Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <!--Filial Open-->


                            <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
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

    function Guardar() {
        swal("Good job!", "You clicked the button!", "success");
    }

</script>
</html>
<?php
    }else{
        header("location:../login.php");
    }
?>