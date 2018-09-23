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
								Categorización de proyectos
							</h1>
							<ul class="header-dropdown m-r--5">
								<li class="dropdown">
									<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="material-icons">more_vert</i>
									</a>
									<ul class="dropdown-menu pull-right">
										<li>
											<a href="javascript:void(0);">Action</a>
										</li>
										<li>
											<a href="javascript:void(0);">Another action</a>
										</li>
										<li>
											<a href="javascript:void(0);">Something else here</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>

						<div class="body">
							<button type="button" data-toggle="modal" data-target="#guardar" class="btn bg-blue btn-circle-lg waves-effect waves-circle waves-float">
								<i class="material-icons">add</i>
							</button>
							<br>
							<br>
							<div class="table-responsive" id="tablaCategoria">
								<?php
                                   $link = mysqli_connect('173.236.82.180', 'verniearchitect_vertec', 'pass//2018','verniearchitect_db');
								    $sql ="SELECT idCategoria, Nombre, Estado FROM categoria";
                                     $resul= mysqli_query($link,$sql);
                                ?>
								<table class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<th>Categoria </th>
											<th>Estado </th>
											<th>OPIONES</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Categoria </th>
											<th>estado </th>
											<th>OPIONES</th>
										</tr>
									</tfoot>
									<tbody>
										<?php while ($ver= mysqli_fetch_row($resul)): ?>
										<tr>
											<td>
												<?php echo $ver[1]?>
											</td>
											<td>
												<?php if($ver[2]== 1){echo "Activo";}else{echo "Desactivo";}?>
											</td>
											<td>
												<button type="button" onclick="editar('<?php echo $ver[0]?>','<?php echo $ver[1]?>')"
												 data-toggle="modal" data-target="#edit" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
													<i class="material-icons">edit</i>
												</button>
												<button type="button" onclick="eliminar('<?php echo $ver[0]?>')" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
			<!-- para editar -->
			<div class="modal fade" id="edit" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="defaultModalLabel">Actualizar Datos de proyectos</h4>
						</div>
						<div class="modal-body">
							<form id="editCategoria">

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
							<button type="button" id="btnEditCategoria" class="btn btn-success waves-effect">Guardar Cambios</button>
							<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
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
							<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">settings</i>
										</span>
										<div class="form-line">
										<input type="text" id="categoria" name="categoria" class="form-control" placeholder="categoria...">
										</div>
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
	<script src="../js/ControllerJs/categoria.js"></script>
    <script src="../js/ControllerJs/BloqueadorController.js"></script>
</body>
</html>
<?php
    }else{
        header("location:../login.php");
    }
