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
							<form>
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
											<input type="text" class="form-control " placeholder="Nombre del proyecto">
										</div>
									</div>
								</div>

								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">settings</i>
										</span>
										<label for="sel1">Estudio de Suelos * :</label>
										<select name="tipo_doc" class="form-control" id="tipo_doc">
											<option value="si">Si</option>
											<option value="no">NO</option>
										</select>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">date_range</i>
										</span>
										<div class="form-line">
											<input type="text" class="datepicker form-control" placeholder="Inicio del proyecto...">
										</div>
									</div>
								</div>

								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">date_range</i>
										</span>
										<div class="form-line">
											<input type="text" class="datepicker form-control" placeholder="Fin del proyecto...">
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
										<select name="tipo_doc" class="form-control" id="tipo_doc">
											<option value="si">Si</option>
											<option value="no">NO</option>
										</select>
									</div>

								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">info_outline</i>
										</span>

										<label for="sel1">Nivel de importancia * :</label>
										<select name="tipo_doc" class="form-control" id="tipo_doc">
											<option value="si">Si</option>
											<option value="no">NO</option>
										</select>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">attach_money</i>
										</span>
										<div class="form-line">
											<input type="number" class="form-control money-dollar" placeholder="Ex: S/. 99,99 ">
										</div>
									</div>
								</div>

								<button type="button" class="btn btn-success m-t-15 waves-effect">Registrar</button>
								<button type="button"  class="btn btn-danger m-t-15 waves-effect">Cancelar</button>

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
</body>
<script>
	function Guardar() {
		swal("Good job!", "You clicked the button!", "success");
	}
</script>

</html>
<?php
    }else{
        header("../login.php");
    }
