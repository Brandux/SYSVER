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
							<h1 class="text-center">
								Nuestros Clientes
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
							<button type="button" data-toggle="modal" data-target="#addCliente" class="btn bg-blue btn-circle-lg waves-effect waves-circle waves-float">
								<i class="material-icons">add</i>
							</button>
							<br>
							<br>
							<div class="table-responsive" id="tablaProyecto">
								<?php
                                $link = mysqli_connect('localhost', 'vertec', 'vernie123','vernie_db');
                                $sql ="SELECT IDCLIENTE , NOMBRE, TIPO_IDENTIDAD AS DOC , DOC_IDENTIDAD AS NUMERO , CELULAR, TELEFONO,  EMAIL FROM cliente;";
                                $resul= mysqli_query($link,$sql);?>
								<table id="tablaProyectosp1" class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<th class="text-center">Nombre </th>
											<th>Documento de identidad</th>
											<th>Número de Documento</th>
											<th>Celular</th>
											<th>Telefono</th>
											<th>Correo</th>
											<th>OPIONES</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Cliente </th>
											<th>Documento de identidad</th>
											<th>Número de Documento</th>
											<th>Celular</th>
											<th>Telefono</th>
											<th>Correo</th>
											<th>OPIONES</th>
										</tr>
									</tfoot>
									<tbody>
										<?php while ($ver= mysqli_fetch_row($resul)): ?>
										<tr>
											<td>
												<strong>
													<?php echo $ver[1]?>
												</strong>
											</td>
											<td class="text-center">
												<?php echo $ver[2]?>
											</td>
											<td class="text-center">
												<?php echo $ver[3]?>
											</td>
											<td>
												<?php echo $ver[4]?>
											</td>
											<td>
												<?php echo $ver[5]?>
											</td>
											<td>
												<?php echo $ver[6]?>
											</td>
											<td>
												<button type="button" onclick="editarCliente('<?php echo $ver[0]?>','<?php echo $ver[2]?>','<?php echo $ver[3]?>','<?php echo $ver[4]?>','<?php echo $ver[5]?>', '<?php echo $ver[6]?>')"
												 data-toggle="modal" data-target="#edit" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
													<i class="material-icons">edit</i>
												</button>
												<button type="button" onclick="eliminarCliente('<?php echo $ver[0]?>')" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
													<i class="material-icons">close</i>
												</button>
											</td>
										</tr>
										<?php endwhile;
                                       
                                        ?>
									</tbody>
								</table>


							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- #END# Exportable Table -->
			<!-- #END# CPU Usage -->
			<!--modal para guardar ClIENTES-->
			<div class="modal fade" id="addCliente" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title text-center" id="defaultModalLabel">Registrar nuevo cliente</h1>
						</div>
						<div class="modal-body">
							<form id="formCliente">
								<div class="form-group">
									<div class="form-line">
										<input type="text" id="nombre" name="nombre" class="form-control required" placeholder="Nombre y apellido * ">
									</div>
								</div>
								<div class="form-group">
									<label for="sel1">Tipo documento * :</label>
									<select name="tipo_doc" class="form-control" id="tipo_doc">
										<option value="DNI">DNI</option>
										<option value="CARNET">Carnet de extranjeria</option>
										<option value="RUC">RUC</option>
									</select>
								</div>
								<div class="form-group">
									<div class="form-line">
										<input type="number" id="num_doc" name="num_doc" class="form-control required" placeholder="Número de Documentos *">
									</div>
								</div>
								<div class="form-group">
									<div class="form-line">
										<input type="text" id="email" name="email" class="form-control required" placeholder="Correo electronico *">
									</div>
								</div>
								<div class="form-group">
									<div class="form-line">
										<input type="number" id="celular" name="celular" class="form-control required" placeholder="Número de celular *">
									</div>
								</div>
								<div class="form-group">
									<div class="form-line">
										<input type="number" id="telefono" name="telefono" class="form-control" placeholder="Telefono (opcional)">
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" id="regCliente" class="btn btn-success waves-effect">Guardar Cambios</button>
							<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Default Size -->
			<div class="modal fade" id="edit" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h1 class="modal-title text-center" id="defaultModalLabel">Actualizar Datos del Cliente</h1>
						</div>
						<div class="modal-body">
							<form id="editCliente">

								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">work</i>
										</span>
										<div class="form-line">
											<label for="sel1" id="doc_identidad">Numero de Documento * :</label>
											<input type="hidden" id="idCliente" value="" name="idCliente">
											<input type="number" id="Num_Doc" name="Num_Doc" class="form-control" placeholder="numero">
										</div>
									</div>
								</div>

								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">edit</i>
										</span>
										<div class="form-line">
											<label for="sel1">Celular * :</label>
											<input type="number" id="celu" name="celu" class="form-control" placeholder="Celular...">
										</div>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<div class="form-line">
											<label for="sel1">Correo Electronico * :</label>
											<input type="email" id="gmail" name="gmail" class="form-control" placeholder="Correo">
										</div>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">phone</i>
										</span>
										<div class="form-line">
											<label for="sel1">Telefono * :</label>
											<input type="number" id="fono" name="fono" class="form-control" placeholder="telefono">
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" id="actualizarCliente" class="btn btn-success waves-effect">Guardar Cambios</button>
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
	<script src="../js/ControllerJs/cliente.js"></script>

</body>
</html>
<?php
    }else{
        header("location:../login.php");
    }
