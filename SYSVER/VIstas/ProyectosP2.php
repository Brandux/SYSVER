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
			<!-- Vertical Layout | With Floating Label -->
			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="alert bg-teal alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						Por favor llenar los datos
						<strong>Correctamente..!!</strong>
					</div>
					<div class="card">
						<div class="header">
							<h1 class="text-center">
								AREA DE REGISTRO DE PROYECTOS
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
							<form id="regisProyecto">
								<div class="row clearfix">
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<button class="btn btn-success btn-lg btn-block waves-effect" type="button">
											<strong>Datos del proyecto</strong>
										</button>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">format_align_center</i>
										</span>
										<div class="form-line">
											<input type="text" id="proyecto" name="proyecto" class="form-control " placeholder="Nombre del proyecto">
										</div>
									</div>
								</div>

								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">settings</i>
										</span>
										<label for="sel1">Estudio de Suelos * :</label>
										<select name="Es_suelo" class="form-control" id="Es_suelo">
											<option value="1">Si</option>
											<option value="0">NO</option>
										</select>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">date_range</i>
										</span>
										<div class="form-line">
											<input type="text" id="fecha_ini" name="fecha_ini" class="datepicker form-control" placeholder="Inicio del proyecto...">
										</div>
									</div>
								</div>

								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">date_range</i>
										</span>
										<div class="form-line">
											<input type="text" id="fecha_fin" name="fecha_fin" class="datepicker form-control" placeholder="Fin del proyecto...">
										</div>
									</div>
								</div>

								<div class="row clearfix">
									<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
										<button class="btn bg-teal btn-lg btn-block waves-effect" type="button">
											<strong>Datos del Contrato</strong>
										</button>
									</div>
								</div>

								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">account_circle</i>
										</span>
										<label for="sel1">Cliente * :</label>
										<?php
										$link = mysqli_connect('localhost', 'vertec', 'vernie123','vernie_db');
											$sql ="SELECT IDCLIENTE,NOMBRE FROM CLIENTE;";
											$resul= mysqli_query($link,$sql);?>
										<select  class="form-control" name="idCliente" id="idCliente">
											<?php while ($ver= mysqli_fetch_row($resul)): ?>
											<option value="<?php echo $ver[0]?>"><?php echo $ver[1]?></option>
											<?php endwhile;?>
										</select>
									</div>

								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">info_outline</i>
										</span>
										<label for="sel1">Nivel de importancia * :</label>
										<?php
										$link = mysqli_connect('localhost', 'vertec', 'vernie123','vernie_db');
											$sql ="SELECT IDCATEGORIA, NOMBRE FROM CATEGORIA WHERE ESTADO =1;";
											$resul= mysqli_query($link,$sql);?>
										<select  class="form-control" name="idCategoria" id="idCategoria">
											<?php while ($ver= mysqli_fetch_row($resul)): ?>
											<option value="<?php echo $ver[0]?>"><?php echo $ver[1]?></option>
											<?php endwhile;?>
										</select>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">attach_money</i>
										</span>
										<div class="form-line">
											<input type="number" id="sueldo" name="sueldo" class="form-control money-dollar" placeholder="Ex: S/. 99,99 ">
										</div>
									</div>
								</div>

								<button type="button" id="btnProyecto" class="btn btn-success m-t-15 waves-effect">Registrar</button>
								<button type="button"  id="cancel" class="btn btn-danger m-t-15 waves-effect">Cancelar</button>

							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- Vertical Layout | With Floating Label -->
			<!-- #END# CPU Usage -->

		</div>
	</section>
	<!--Fin de area de contenido-->
	<!-- Archivos Javascript -->
	<?php Include("../includes/jsGeneral.php");?>
	<script src="../js/ControllerJs/proyectoP2.js"></script>
</body>
</html>
<?php
    }else{
        header("location:../login.php");
    }
