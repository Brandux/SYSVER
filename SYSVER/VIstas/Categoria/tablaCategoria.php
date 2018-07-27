<?php
    require_once "../../controller/Conexion.php";
    $c= new conectar();
    $conexion =$c->conexion();
    $sql ="SELECT idCategoria, Nombre, Estado FROM categoria";
    $resul= mysqli_query($conexion,$sql);
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
        <td><?php echo $ver[1]?></td>
        <td><?php if($ver[2]== 1){echo "Activo";}else{echo "Desactivo";}?></td>
        <td>
        <button type="button"  onclick="editar('<?php echo $ver[0]?>','<?php echo $ver[1]?>')"  data-toggle="modal" data-target="#edit"  class="btn btn-info btn-circle waves-effect waves-circle waves-float">
            <i class="material-icons">edit</i></button>
        <button type="button" onclick="eliminar('<?php echo $ver[0]?>')" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
            <i class="material-icons">close</i></button>
        </td>
        </tr><?php endwhile;?>
    </tbody>
</table>