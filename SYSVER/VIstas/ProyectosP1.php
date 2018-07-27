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
                         <!-- Exportable Table -->
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                               Lista de Proyectos
                                            </h2>
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
                                              <button type="button" id="add"  class="btn bg-blue btn-circle-lg waves-effect waves-circle waves-float">
                                                    <i class="material-icons">add</i>
                                            </button>
                                            <br><br>
                                            <div class="table-responsive" id="tablaProyecto">
                                                <!-- Aqui va la tabla proyecto-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- #END# Exportable Table -->
                <!-- #END# CPU Usage -->
                <!-- Default Size -->
                <div class="modal fade" id="edit" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModalLabel">Actualizar Datos de proyectos</h4>
                            </div>
                            <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" placeholder="Corre Electronico">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" id="password" class="form-control" placeholder="Fechas fin">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" placeholder="Sueldo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" placeholder="Sueldo">
                                    </div>
                                </div>
                            </form>                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-link waves-effect">Guardar Cambios</button>
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!--Fin de area de contenido-->
    
    <!-- Archivos Javascript -->
   <?php Include("../includes/jsGeneral.php");?>
</body>
<script>
    $(document).ready(function(){
        $('#tablaProyecto').load('Proyecto/tablaProyecto.php');
    });

    $("#add").click(function(){
        location.href ="http://localhost/SYSVER/SYSVER/Vistas/ProyectosP2.php";
    });

    function eliminar(){
        swal({
        title: " Deseas eliminar?",
        text: "Estos datos se perderan pernanentemente..!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, obviamente!",
        closeOnConfirm: false
        }, function () {
            swal("Eliminado correctamente!", "success");
        });
    }
    
</script>
</html>



<?php
    }else{
        header("location:../login.php");
    }
?>