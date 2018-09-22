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
                                 $link = mysqli_connect('173.236.82.180', 'verniearchitect_vertec', 'pass//2018','verniearchitect_db');
                                $sql ="SELECT PRO.idProyecto AS IDPRO, CL.NOMBRE AS CLIENTE ,PRO.NOMBRE AS PROYECTO, PRO.ESTUDIO_SUELO AS STSUELO, CONCAT( DATE_FORMAT(PRO.FECHA_INICIO,'%d %b , %Y'), ' : hasta : ', DATE_FORMAT(PRO.FECHA_FIN,'%d %b , %Y')) AS FECHA , DATEDIFF(PRO.FECHA_FIN,PRO.fecha_inicio)+1 as dias_totales, DATEDIFF(PRO.FECHA_FIN, NOW()) as DiasRestantes, CT.NOMBRE AS CATEGORIA, CON.COSTO_TOTAL AS COSTO , PRO.ESTADO AS ESTADO , CON.idcontrato , PRO.FECHA_FIN FROM proyecto PRO inner join contrato CON ON CON.idContrato = PRO.idContrato INNER JOIN categoria CT ON CT.idCategoria = CON.idCategoria INNER JOIN cliente CL ON CL.idCliente = CON.idCliente";
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
											<td>
												<?php echo $ver[1]?>
											</td>
											<td>
												<strong>
													<?php echo $ver[2]?>
												</strong>
											</td>
											<td>
												<?php echo $ver[4]?>
											</td>
											<td class="text-center">
												<?php echo $ver[5]?>
											</td>
											<td class="text-center">
												<?php echo $ver[6]?>
											</td>
											<td>S./
												<?php echo $ver[8]?>
											</td>
											<td class="text-center">
												<?php if($ver[3]==1){
                                                echo "<span class='badge bg-teal'>SI</span>";
                                            }else{
                                                echo "<span class='badge bg-pink'>NO</span>";
                                            }?>
											</td>
											<td class="text-center">
												<strong>
													<?php echo $ver[7]?>
												</strong>
											</td>
											<td>
												<?php if($ver[9]==1){
                                                echo "<span class='badge bg-green'>En Proceso</span>";
                                                }else if($ver[9]==0){
                                                    echo "<span class='badge bg-orange'>Terminado</span>";
												}else if($ver[9]==2){
                                                    echo "<span class='badge bg-red'>Cancelado</span>";
                                                }
                                            ?>
											</td>
											<td>
												<button type="button" onclick="editarCliente('<?php echo $ver[10]?>','<?php echo $ver[0]?>','<?php echo $ver[2]?>','<?php echo $ver[11]?>','<?php echo $ver[8]?>','<?php echo $ver[3]?>','<?php echo $ver[9]?>')"
												 data-toggle="modal" data-target="#edit" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
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
							<h1 class="modal-title text-center" id="defaultModalLabel">Actualizar Datos de proyectos</h1>
						</div>
						<div class="modal-body">
							<form id="editformPoryecto">
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">edit</i>
										</span>
										<div class="form-line">
											<label for="sel1">Nombre del Proyecto * :</label>
											<input type="hidden" id="idContr" value="" name="idContr">
											<input type="hidden" id="idPro" value="" name="idPro">
											<input type="text" id="nom_edit_proyex" name="nom_edit_proyex" class="form-control" placeholder="Proyecto...">
										</div>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">date_range</i>
										</span>
										<div class="form-line">
											<label for="sel1">fin del proyecto * :</label>
											<input type="text" id="edit_finpro" name="edit_finpro" class="datepicker form-control" placeholder="Fin del proyecto...">
										</div>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">shopping_cart</i>
										</span>
										<div class="form-line">
											<label for="sel1">Costo Total * :</label>
											<input type="number" id="edit_Costo" name="edit_Costo" class="form-control" placeholder="Costo...">
										</div>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">location_on</i>
										</span>
										<div class="form-line">
											<label for="sel1">Estudio de suelo * :</label>
											<select name="edit_Es_suelo" class="form-control" id="edit_Es_suelo">
												<option value="1">Si</option>
												<option value="0">NO</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">https</i>
										</span>
										<div class="form-line">
											<label for="sel1">ESTADO * :</label>
											<select name="edit_estado" class="form-control" id="edit_estado">
												<option value="1">En Proceso</option>
												<option value="0">Terminado</option>
												<option value="2">Cancelado</option>
											</select>
										</div>
									</div>
								</div>

							</form>
						</div>
						<div class="modal-footer">
							<button type="button" id="editarProyecto" class="btn btn-success waves-effect">Guardar Cambios</button>
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
	<script src="../js/ControllerJs/BloqueadorController.js"></script>
</body>
<script>
	$("#add").click(function() {
		location.href = "http://sysver.verniearchitect.com/VIstas/ProyectosP2.php";
	});

	// para editar 
	function editarCliente(idCon, idProy, proyecto, finPro, Cost, es_suel, estado) {
		$("#idContr").val(idCon);
		$("#idPro").val(idProy);
		$("#nom_edit_proyex").val(proyecto);
		$("#edit_finpro").val(finPro);
		$("#edit_Costo").val(Cost);
		$("#provincia option[value="+ valor +"]").attr("selected",true);
		$("#edit_Es_suelo option[value="+es_suel+"]").attr("selected",true);
		$("#edit_estado option[value="+estado+"]").attr("selected",true);
	}

	$('#editarProyecto').click(function() {
		vacios = validarFormVacio('editformPoryecto');
		if (vacios > 0) {
			swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
			return false;
		}
		datos = $('#editformPoryecto').serialize();
		console.log(datos);
		$.ajax({
			type: "POST",
			data: datos,
			url: "../controller/Proyecto/editProyecto.php",
			success: function(r) {
				console.log(r);
				if (r == 1) {
					swal("Editado correctamente!", "Da clic en el boton Ok!", "success");
					location.reload();
				} else {
					swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
				}
			}
		});
	});
	$('#edit_finpro').bootstrapMaterialDatePicker({ weekStart : 0, time: false });
</script>

</html>
<?php
    }else{
        header("location:../login.php");
    }
