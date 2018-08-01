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
							<h1  class="text-center">
								Lista de Proyectos
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
							<button type="button" id="add" class="btn bg-blue btn-circle-lg waves-effect waves-circle waves-float">
								<i class="material-icons">add</i>
							</button>
							<br>
							<br>
							<div class="table-responsive" id="tablaProyecto">
								<?php
                                $link = mysqli_connect('localhost', 'vertec', 'vernie123','vernie_db');
                                $sql ="SELECT pro.idPROYECTO AS IDPRO, cl.NOMBRE AS CLIENTE ,PRO.NOMBRE AS PROYECTO, PRO.ESTUDIO_SUELO AS STSUELO,
                                            CONCAT( DATE_FORMAT(PRO.FECHA_INICIO,'%d  %b , %Y'), ' : hasta : ', DATE_FORMAT(PRO.FECHA_FIN,'%d  %b , %Y')) AS FECHA , 
                                            DATEDIFF(PRO.FECHA_FIN,PRO.fecha_inicio)+1 as dias_totales,
                                            DATEDIFF(PRO.FECHA_FIN, NOW()) as DiasRestantes,
                                            CT.NOMBRE AS CATEGORIA, CON.COSTO_TOTAL AS COSTO , pro.ESTADO AS ESTADO
                                            FROM proyecto PRO
                                            inner join CONTRATO CON ON CON.IDCONTRATO = PRO.IDCONTRATO
                                            INNER JOIN CATEGORIA CT ON CT.IDCATEGORIA = CON.IDCATEGORIA	
                                            INNER JOIN CLIENTE CL ON CL.IDCLIENTE = CON.IDCLIENTE ";
                                $resul= mysqli_query($link,$sql);?>
								<table id="tablaProyectosp1" class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<th>Cliente </th>
											<th>Proyecto</th>
											<th>Fecha de duracion</th>
											<th>Dias Totales</th>
											<th>Dias Restantes</th>
											<th>Costo total</th>
											<th>Est de suelos</th>
											<th>Categoria</th>
											<th>Estado</th>
											<th>OPIONES</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Cliente </th>
											<th>Proyecto</th>
											<th>Fecha de duracion</th>
											<th>Dias Totales</th>
											<th>Dias Restantes</th>
											<th>Costo total</th>
											<th>Est de suelos</th>
											<th>Categoria</th>
											<th>Estado</th>
											<th>OPIONES</th>
										</tr>
									</tfoot>
									<tbody>
										<?php while ($ver= mysqli_fetch_row($resul)): ?>
										<tr>
											<td><?php echo $ver[1]?></td>
											<td><?php echo $ver[2]?></td>
											<td><?php echo $ver[4]?></td>
											<td class="text-center"><?php echo $ver[5]?></td>
											<td class="text-center"><?php echo $ver[6]?></td>
											<td>S./ <?php echo $ver[8]?></td>
                                            <td class="text-center"><?php if($ver[3]==1){
                                                echo "<span class='badge bg-teal'>SI</span>";
                                            }else{
                                                echo "<span class='badge bg-pink'>NO</span>";
                                            }?></td>
											<td class="text-center"><strong><?php echo $ver[7]?></strong></td>
											<td><?php if($ver[9]==1){
                                                echo "<span class='badge bg-green'>En Proceso</span>";
                                                }else if($ver[9]==0){
                                                    echo "<span class='badge bg-orange'>Terminado</span>";
												}else if($ver[9]==2){
                                                    echo "<span class='badge bg-red'>Cancelado</span>";
                                                }
                                            ?></td>
											<td>
												<button type="button" data-toggle="modal" data-target="#edit" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
													<i class="material-icons">edit</i>
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
	$(document).ready(function() {

	});



	$("#add").click(function() {
		location.href = "http://localhost/SYSVER/SYSVER/Vistas/ProyectosP2.php";
	});

	function eliminar() {
		swal({
			title: " Deseas eliminar?",
			text: "Estos datos se perderan pernanentemente..!",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: "#DD6B55",
			confirmButtonText: "Si, obviamente!",
			closeOnConfirm: false
		}, function() {
			swal("Eliminado correctamente!", "success");
		});
	}
</script>

</html>



<?php
    }else{
        header("location:../login.php");
    }
