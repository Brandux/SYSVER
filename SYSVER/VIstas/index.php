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
                                $link = mysqli_connect('localhost', 'vertec', 'vernie123','vernie_db');
                                $sql ="SELECT count(*) as numero FROM worker";
								$resul= mysqli_query($link,$sql);
								 while ($ver= mysqli_fetch_row($resul)): ?>
							<div class="number count-to" data-from="0" data-to="<?php echo $ver[0]?>" data-speed="1000" data-fresh-interval="20"></div>
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
                                $link = mysqli_connect('localhost', 'vertec', 'vernie123','vernie_db');
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
                                $link = mysqli_connect('localhost', 'vertec', 'vernie123','vernie_db');
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
							<h2>Ranking de Proyectos</h2>
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
									<thead>
										<tr>
											<th>#</th>
											<th>Task</th>
											<th>Status</th>
											<th>Manager</th>
											<th>Progress</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Task A</td>
											<td>
												<span class="label bg-green">Doing</span>
											</td>
											<td>John Doe</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-green" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>2</td>
											<td>Task B</td>
											<td>
												<span class="label bg-blue">To Do</span>
											</td>
											<td>John Doe</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-blue" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>3</td>
											<td>Task C</td>
											<td>
												<span class="label bg-light-blue">On Hold</span>
											</td>
											<td>John Doe</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-light-blue" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>4</td>
											<td>Task D</td>
											<td>
												<span class="label bg-orange">Wait Approvel</span>
											</td>
											<td>John Doe</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-orange" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%"></div>
												</div>
											</td>
										</tr>
										<tr>
											<td>5</td>
											<td>Task E</td>
											<td>
												<span class="label bg-red">Suspended</span>
											</td>
											<td>John Doe</td>
											<td>
												<div class="progress">
													<div class="progress-bar bg-red" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%"></div>
												</div>
											</td>
										</tr>
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
						<div class="body bg-teal">
							<div class="font-bold m-b--35">ANSWERED TICKETS</div>
							<ul class="dashboard-stat-list">
								<li>
									TODAY
									<span class="pull-right">
										<b>12</b>
										<small>TICKETS</small>
									</span>
								</li>
								<li>
									YESTERDAY
									<span class="pull-right">
										<b>15</b>
										<small>TICKETS</small>
									</span>
								</li>
								<li>
									LAST WEEK
									<span class="pull-right">
										<b>90</b>
										<small>TICKETS</small>
									</span>
								</li>
								<li>
									LAST MONTH
									<span class="pull-right">
										<b>342</b>
										<small>TICKETS</small>
									</span>
								</li>
								<li>
									LAST YEAR
									<span class="pull-right">
										<b>4 225</b>
										<small>TICKETS</small>
									</span>
								</li>
								<li>
									ALL
									<span class="pull-right">
										<b>8 752</b>
										<small>TICKETS</small>
									</span>
								</li>
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
