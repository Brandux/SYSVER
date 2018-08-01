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
                                $sql ="SELECT IDCLIENTE , NOMBRE, TIPO_IDENTIDAD AS DOC , DOC_IDENTIDAD AS NUMERO , CELULAR, TELEFONO, ESTADO, EMAIL FROM cliente;";
                                $resul= mysqli_query($link,$sql);?>
								<table id="tablaProyectosp1" class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<th  class="text-center">Nombre </th>
											<th>Documento de identidad</th>
											<th>Número de Documento</th>
											<th>Celular</th>
											<th>Telefono</th>
											<th>Correo</th>
											<th>Estado</th>
											<th>OPIONES</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Cliente </th>
											<th >Documento de identidad</th>
											<th>Número de Documento</th>
											<th>Celular</th>
											<th>Telefono</th>
											<th>Correo</th>
											<th>Estado</th>
											<th>OPIONES</th>
										</tr>
									</tfoot>
									<tbody>
										<?php while ($ver= mysqli_fetch_row($resul)): ?>
										<tr>
											<td><?php echo $ver[1]?></td>
											<td  class="text-center"><?php echo $ver[2]?></td>
											<td class="text-center"><?php echo $ver[3]?></td>
											<td><?php echo $ver[4]?></td>
											<td><?php echo $ver[5]?></td>
											<td><?php echo $ver[7]?></td>
                                            <td><?php if($ver[6]==1){
                                                echo "<span class='badge bg-teal'>Activos</span>";
                                            }else{
                                                echo "<span class='badge bg-pink'>Inactivos</span>";
                                            }?></td>
											<td>
												<button type="button" data-toggle="modal" data-target="#edit" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
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
										<input type="text" id="nombre"  name="nombre" class="form-control required" placeholder="Nombre y apellido * ">
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
										<input type="text" id="email"  name="email" class="form-control required" placeholder="Correo electronico *">
									</div>
								</div>
								<div class="form-group">
									<div class="form-line">
										<input type="number" id="celular"  name="celular" class="form-control required" placeholder="Número de celular *">
									</div>
								</div>
								<div class="form-group">
									<div class="form-line">
										<input type="number" id="telefono"  name="telefono" class="form-control" placeholder="Telefono (opcional)">
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

	 //script para guardar
	 $('#regCliente').click(function(){
            vacios = validarFormVacio('formCliente');
            if(vacios>0){
                swal("UPS!! Debe completar los campos", "Da clic en el boton Ok!", "info");
                return false;
            }
            datos=$('#formCliente').serialize();
            console.log(datos);
            $.ajax({
                type:"POST",
                data: datos,
                url:"../controller/Cliente/agregarCliente.php",
                success:function(r){
                    console.log(r);
                    if(r==1){
                        $('#addCliente').modal('hide');
                        swal("Registrado correctamente!", "Da clic en el boton Ok!", "success");
						location.reload();
                    }else{
                        swal("Problemas.. Intentelo nuevamente!", "Da clic en el boton Ok!", "info");
                    }
                }
            });
        });

		//script para eliminar
    function eliminarCliente(id){
        swal({
        title: " Deseas eliminar?",
        text: "Estos datos se perderan pernanentemente..!" ,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, obviamente!",
        closeOnConfirm: false
        }, function () {
           $.ajax({
                type:"POST",
                data: "idcliente="+id,
                url:"../controller/Cliente/deleteCliente.php",
                success:function(r){
                    console.log(r);
                    if(r==1){
						swal("Eliminado correctamente!", "Da clic en el boton Ok!", "success");
						location.reload();
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
