<?php
    require_once "../../controller/Conexion.php";
    $c= new conectar();
    $conexion =$c->conexion();
    $sql ="SELECT pro.idPROYECTO AS IDPRO, cl.NOMBRE AS CLIENTE ,PRO.NOMBRE AS PROYECTO, PRO.ESTUDIO_SUELO AS STSUELO,
            CONCAT( DATE_FORMAT(PRO.FECHA_INICIO,'%d  %b , %Y'), ' : hasta : ', DATE_FORMAT(PRO.FECHA_FIN,'%d  %b , %Y')) AS FECHA , 
            DATEDIFF(PRO.FECHA_FIN,PRO.fecha_inicio)+1 as dias_totales,
            DATEDIFF(PRO.FECHA_FIN, NOW()) as DiasRestantes,
            CT.NOMBRE AS CATEGORIA, CON.COSTO_TOTAL AS COSTO , pro.ESTADO AS ESTADO
            FROM proyecto PRO
            inner join CONTRATO CON ON CON.IDCONTRATO = PRO.IDCONTRATO
            INNER JOIN CATEGORIA CT ON CT.IDCATEGORIA = CON.IDCATEGORIA	
            INNER JOIN CLIENTE CL ON CL.IDCLIENTE = CON.IDCLIENTE ";
    $resul= mysqli_query($conexion,$sql);
?>
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
			<td>Javascript Developer</td>
			<td>Singapore</td>
			<td>29</td>
			<td>Singapore</td>
			<td>29</td>
			<td>2011/06/27</td>
			<td>2011/06/27</td>
			<td>
				<span class="badge bg-teal">ACTIVO</span>
			</td>
			<td>
				<button type="button" data-toggle="modal" data-target="#edit" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
					<i class="material-icons">edit</i>
				</button>
				<button type="button" onclick="eliminar()" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
					<i class="material-icons">close</i>
				</button>
			</td>
		</tr>
		<?php endwhile;?>
	</tbody>
</table>