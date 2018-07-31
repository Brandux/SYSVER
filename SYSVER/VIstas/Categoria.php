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
                         <!-- Exportable Table -->
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h1 class="text-center">
                                               Categorización de proyectos
                                            </h1>
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
                                              <button type="button"  data-toggle="modal" data-target="#guardar"  class="btn bg-blue btn-circle-lg waves-effect waves-circle waves-float">
                                                    <i class="material-icons">add</i>
                                                </button>
                                            <br><br>
                                            <div class="table-responsive" id="tablaCategoria">
                                               <!-- tabla categoria-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- #END# Exportable Table -->
                <!-- #END# CPU Usage -->
                <!-- para editar -->
                <div class="modal fade" id="edit" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModalLabel">Actualizar Datos de proyectos</h4>
                            </div>
                            <div class="modal-body">
                            <form id="editCategoria"    >
                            
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="hidden" id="idCategoria" value="" name="idcate">
                                        <input type="text" id="categoriaU" name="categoria" class="form-control" placeholder="Categoria">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="sel1">Estado :</label>
                                    <select name="estado" class="form-control" id="estado">
                                        <option value="1">Activo</option>
                                        <option value="0">Desactivo</option>
                                    </select>
                                </div>
                            </form>                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="btnEditCategoria" class="btn btn-link waves-effect">Guardar Cambios</button>
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- Modal para guardar -->
                <div class="modal fade" id="guardar" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModalLabel">Agregar una nueva categoria</h4>
                            </div>
                            <div class="modal-body">
                            <form id="fromCat">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="categoria" name="categoria" class="form-control" placeholder="categoria...">
                                    </div>
                                </div>
                            </form>                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="addCate" class="btn btn-link waves-effect">Guardar Cambios</button>
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
        $("#tablaCategoria").load("Categoria/tablaCategoria.php");
    });
    //script para guardar
    $('#addCate').click(function(){
            vacios = validarFormVacio('fromCat');
            if(vacios>0){
                swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
                return false;
            }
            datos=$('#fromCat').serialize();
            console.log(datos);
            $.ajax({
                type:"POST",
                data: datos,
                url:"../controller/Categoria/agregarCategoria.php",
                success:function(r){
                    console.log(r);
                    if(r==1){
                        $('#guardar').modal('hide');
                        swal("Registrado correctamente!", "Da clic en el boton Ok!", "success");
                        $("#fromCat")[0].reset();
                        $("#tablaCategoria").load("Categoria/tablaCategoria.php");
                    }else{
                        swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
                    }
                }
            });
        });

    // para editar 
    function editar(idCategoria, categoria){
        $("#idCategoria").val(idCategoria);
        $("#categoriaU").val(categoria);
        //swal("Problemas.. Intentelo nuevamente!" + id, "Da clic en el boton Ok!", "info");
    }

    $('#btnEditCategoria').click(function(){
            vacios = validarFormVacio('editCategoria');
            if(vacios>0){
                swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
                return false;
            }
            datos=$('#editCategoria').serialize();
            console.log(datos);
            $.ajax({
                type:"POST",
                data: datos,
                url:"../controller/Categoria/editCategoria.php",
                success:function(r){
                    console.log(r);
                    if(r==1){
                        $('#edit').modal('hide');
                        swal("Editado correctamente!", "Da clic en el boton Ok!", "success");
                        $("#editCategoria")[0].reset();
                        $("#tablaCategoria").load("Categoria/tablaCategoria.php");
                    }else{
                        swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
                    }
                }
            });
        });
    
    // Funcion para eliminar
    function eliminar(id){
        swal({
        title: " Deseas eliminar?",
        text: "Estos datos se perderan pernanentemente..!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, obviamente!",
        closeOnConfirm: false
        }, function () {
            $.ajax({
                type:"POST",
                data: "idCate="+id,
                url:"../controller/Categoria/deleteCategoria.php",
                success:function(r){
                    console.log(r);
                    if(r==1){
                        swal("Eliminado correctamente!", "Da clic en el boton Ok!", "success");
                        $("#tablaCategoria").load("Categoria/tablaCategoria.php");
                    }else{
                        swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
                    }
                }
            });
             swal("Editado correctamente!", "Da clic en el boton Ok!", "success");
        });
    }
    
</script>
</html>
<?php
    }else{
        header("location:../login.php");
    }
?>