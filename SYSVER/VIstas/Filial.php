<?php
    session_start();
    if(isset($_SESSION['usuario'])){
?>
<!DOCTYPE html>
<html lang="es">
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
                                               Registro de Sedes o Filiales
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
                                            <div class="table-responsive">
                                            <?php
                                                $link = mysqli_connect('173.236.82.180', 'verniearchitect_vertec', 'pass//2018','verniearchitect_db');
                                                    $sql ="SELECT idFilial, Nombre, Cell, Ruc, Estado from filial";
                                                    $resul= mysqli_query($link,$sql);
                                                ?>
                                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>Filial </th>
                                                            <th>celular </th>
                                                            <th>ruc  </th>
                                                            <th>OPIONES</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Filial </th>
                                                            <th>celular </th>
                                                            <th>ruc  </th>
                                                            <th>OPIONES</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody>
                                                    <?php while ($ver= mysqli_fetch_row($resul)): ?>
                                                          <tr>
                                                            <td><?php echo $ver[1]?></td>
                                                            <td><?php echo $ver[2]?></td>
                                                            <td><?php echo $ver[3]?></td>
                                                            <td>
                                                                <button type="button" onclick="editar('<?php echo $ver[0]?>','<?php echo $ver[1]?>','<?php echo $ver[2]?>','<?php echo $ver[3]?>')" data-toggle="modal" data-target="#edit" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                 <button type="button"  onclick="eliminar('<?php echo $ver[0]?>')" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            
                                                            </td>
                                                            </tr>
                                                        <?php endwhile;?>
                                                    </tbody>
                                                </table>
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
                            <form id="editformCategoria">
                            <input type="hidden" id="idfilial" value="" name="idfili">
                            <div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">work</i>
										</span>
										<div class="form-line">
											<input type="text" id="filial_edit" name="filial_edit" class="form-control ">
										</div>
									</div>
								</div>
                                <div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">phone</i>
										</span>
										<div class="form-line">
											<input type="number" id="celular_edit" name="celular_edit" class="form-control ">
										</div>
									</div>
								</div>
                                <div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">settings</i>
										</span>
										<div class="form-line">
											<input type="number" id="ruc_edit" name="ruc_edit" class="form-control " >
										</div>
									</div>
								</div>
                            </form>                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="btnEditCategoria" class="btn btn-success waves-effect">Guardar Cambios</button>
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- Default Size -->
                <div class="modal fade" id="guardar" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="defaultModalLabel">Actualizar Datos de proyectos</h4>
                            </div>
                            <div class="modal-body">
                            <form id="fromFil">
                                <div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">work</i>
										</span>
										<div class="form-line">
											<input type="text" id="filial" name="Filial" class="form-control " placeholder="Filial">
										</div>
									</div>
								</div>
                                <div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">phone</i>
										</span>
										<div class="form-line">
											<input type="number" id="celular" name="celular" class="form-control " placeholder="celular">
										</div>
									</div>
								</div>
                                <div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">settings</i>
										</span>
										<div class="form-line">
											<input type="number" id="ruc" name="ruc" class="form-control " placeholder="RUC">
										</div>
									</div>
								</div>
                            </form>                                
                            </div>
                            <div class="modal-footer">
                                <button type="button"  id="addCate" class="btn btn-success waves-effect">Guardar Cambios</button>
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </section>
    <!--Fin de area de contenido-->
     <!-- Archivos Javascript -->
    <?php Include("../includes/jsGeneral.php");?>
    <script src="../js/ControllerJs/Filial.js"></script>
    <script src="../js/ControllerJs/BloqueadorController.js"></script>
</body>
</html>
<?php
    }else{
        header("location:../login.php");
    }
?>