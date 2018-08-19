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
			<!-- Widgets -->
			<div class="row clearfix">
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="info-box bg-pink hover-expand-effect">
						<div class="icon">
							<i class="material-icons">work</i>
						</div>
						<div class="content">
							<div class="text"># TRABAJADORES</div>
							<?php
                                $link = mysqli_connect('localhost', 'root', '','verniearchitect_db');
                                $sql ="SELECT count(*) as numero FROM worker";
								$resul= mysqli_query($link,$sql);
								 while ($ver= mysqli_fetch_row($resul)): ?>
							<div class="number count-to" data-from="0" data-to="<?php echo $ver[0]?>" data-speed="1000"
							 data-fresh-interval="20"></div>
							<?php endwhile;?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="info-box bg-cyan hover-expand-effect">
						<div class="icon">
							<i class="material-icons">account_circle</i>
						</div>
						<div class="content">
							<div class="text">
								<strong># CLIENTES</strong>
							</div>
							<?php
                                $link = mysqli_connect('localhost', 'root', '','verniearchitect_db');
                                $sql ="SELECT count(*) as numero FROM cliente";
								$resul= mysqli_query($link,$sql);
								 while ($ver= mysqli_fetch_row($resul)): ?>
							<div class="number count-to" data-from="0" data-to="<?php echo $ver[0]?>" data-speed="1000"
							 data-fresh-interval="20"></div>
							<?php endwhile;?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class="info-box bg-light-green hover-expand-effect">
						<div class="icon">
							<i class="material-icons">location_city</i>
						</div>
						<div class="content">
							<div class="text"># PROYECTOS</div>
							<?php
                                $link = mysqli_connect('localhost', 'root', '','verniearchitect_db');
                                $sql ="SELECT count(*) as numero FROM proyecto";
								$resul= mysqli_query($link,$sql);
								 while ($ver= mysqli_fetch_row($resul)): ?>
							<div class="number count-to" data-from="0" data-to="<?php echo $ver[0]?>" data-speed="1000"
							 data-fresh-interval="20"></div>
							<?php endwhile;?>
						</div>
					</div>
				</div>

			</div>
			<!-- #END# Widgets -->

			<div class="row clearfix">
				<!-- Visitors -->
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					<div class="card">
						<div class="header">
							<h2>Informacion de clientes</h2>
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
							<div class="table-responsive">
								<table class="table table-hover dashboard-task-infos">
								<?php
                                   $link = mysqli_connect('localhost', 'root', '','verniearchitect_db');
								    $sql ="SELECT CL.NOMBRE , CL.CELULAR , cl.email , 
									CASE py.estado
								   WHEN 1 THEN 'En un proyecto'
								   WHEN 2 THEN 'Sin Proyecto'
								   WHEN 0 THEN 'Proyecto terminado'
								   ELSE 'Nuevo'
								   END as realizador
								   FROM cliente CL 
								   inner join contrato co on co.idcliente = cl.idcliente 
								   inner join proyecto py on py.idContrato = co.idContrato ;";
                                     $resul= mysqli_query($link,$sql);
                               		?>
									<thead>
										<tr>
											<th>#</th>
											<th>NOMBRE</th>
											<th>CELULAR</th>
											<th>EMAIL</th>
											<th>ESTA EN PROYECTO?</th>
										</tr>
									</thead>
									<tbody>
									<?php while ($ver = mysqli_fetch_row($resul)): ?>
										<tr>
											<td>1</td>
											<td><?php echo $ver[0]?></td>
											<td><?php echo $ver[1]?></td>
											<td><?php echo $ver[2]?></td>
											<td>
											<?php	echo "<span class='badge bg-'>$ver[3]</span>";?>
											</td>
										</tr>
										<?php endwhile;?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- #END# Visitors -->

				<!-- Answered Tickets -->
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="card">
						<div class="body bg-grey">
							<div class="font-bold m-b--35">PROYECTOS</div>
							<ul class="dashboard-stat-list">
								<?php
                                   $link = mysqli_connect('localhost', 'root', '','verniearchitect_db');
								    $sql ="SELECT PRO.NOMBRE AS PROYECTO , DATEDIFF(PRO.FECHA_FIN,PRO.fecha_inicio)+1 as dias_totales FROM PROYECTO  PRO ORDER BY dias_totales DESC ";
                                     $resul= mysqli_query($link,$sql);
                               		while ($ver= mysqli_fetch_row($resul)): ?>

								<li>
									<?php echo $ver[0]?>
									<span class="pull-right">
										<b><?php echo $ver[1]?></b>
										<small>DÍAS</small>
									</span>
								</li>

								<?php endwhile;?>
							</ul>
						</div>
					</div>
				</div>
				<!-- #END# Answered Tickets -->
			</div>

		</div>
	</section>

	<!--Fin de area de contenido-->


	<!-- Archivos Javascript -->
	<?php Include("../includes/jsGeneral.php");?>
	<script src="../js/ControllerJs/BloqueadorController.js"></script>
</body>
</html>
<?php
    }else{
        header("location: ../login.php");
    }
