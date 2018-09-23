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
    <!-- #END# Page Loader -->
    <!--Heard php-->
    <?php Include("../includes/header.php");?>
    <!-- / Heard php-->
    <!--Nav Bar-->
    <?php Include("../includes/navBar.php");?>
    <!-- / Nav Bar-->

    <section class="content">
        <div class="container-fluid">
            <!-- CPU Usage -->
                         <!-- Exportable Table -->
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                               Lista de trabajadores
                                            </h2>
                                            <ul class="header-dropdown m-r--5">
                                                <li class="dropdown">
                                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                                        <i class="material-icons">more_vert</i>
                                                    </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="javascript:void(0);">Action</a></li>
                                                        <li><a href="javascript:void(0);">Another action</a></li>
                                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="body">
                                            <a href="WorkersP2.php">
                                              <button type="button"  class="btn bg-blue btn-circle-lg waves-effect waves-circle waves-float">
                                                    <i class="material-icons">add</i>
                                                </button>
                                            </a>
                                            <br><br>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>Trabajador </th>
                                                            <th>DNI</th>
                                                            <th>Email</th>
                                                            <th>Edad</th>
                                                            <th>Celular</th>
                                                            <th>Fecha de estadia</th>
                                                            <th>Sueldo</th>
                                                            <th>Estado</th>
                                                            <th class="centered" >OPIONES</th>
                                                        </tr>
                                                    </thead>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Trabajador </th>
                                                            <th>DNI</th>
                                                            <th>Email</th>
                                                            <th>Edad</th>
                                                            <th>Celular</th>
                                                            <th>Fecha de estadia</th>
                                                            <th>Sueldo</th>
                                                            <th>Estado</th>
                                                            <th>OPIONES</th>
                                                        </tr>
                                                    </tfoot>
                                                    <tbody id="tableContent">
                                                          
                                                        <tr>
                                                            <td>Brandux Juarez Avila</td>
                                                            <td>72370779</td>
                                                            <td>branduxjuarez@upeu.edu.pe</td>
                                                            <td>20</td>
                                                            <td>931858464</td>
                                                            <td>20</td>
                                                            <td>890</td>
                                                            <td>ACTIVO</td>
                                                            <td>
                                                                <button type="button"  data-toggle="modal" data-target="#edit"  class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                 <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jesus Jordan Elias Chavez</td>
                                                            <td>78954663</td>
                                                            <td>jesus@upeu.edu.pe</td>
                                                            <td>21</td>
                                                            <td>123456789</td>
                                                            <td>20</td>
                                                            <td>1200</td>
                                                            <td>RENUNCIA</td>
                                                            <td>
                                                                <button type="button"  data-toggle="modal" data-target="#edit" class="btn btn-info btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">edit</i>
                                                                </button>
                                                                 <button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            
                                                            </td>
                                                        </tr>
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
                                <h4 class="modal-title" id="defaultModalLabel">Actualizar Datos de trabajadores</h4>
                            </div>
                            <div class="modal-body">
                                <form id="regTrab" method="POST">
                                    <div class="form-group form-float">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" id="categoria" name="categoria" class="form-control" placeholder="Correo...">
                                            </div>
                                        </div>
							        </div>
                                    <div class="form-group form-float">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="number" id="categoria" name="categoria" class="form-control" placeholder="Celular...">
                                            </div>
                                        </div>
							        </div>
                                    <div class="form-group form-float">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">money</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="number" id="categoria" name="categoria" class="form-control" placeholder="Sueldo...">
                                            </div>
                                        </div>
							        </div>
                                    <div class="form-group form-float">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">add</i>
                                            </span>
                                            <div class="form-line">
                                                <select id="horario" class="form-control show-tick">
                                                    <option value="" disabled selected>Estado actual del trabajador</option>
                                                    <option value="1">Vacaciones</option>
                                                    <option value="2">Renuncia</option>
                                                    <option value="3">Fin de Contrato</option>
                                                </select>
                                            </div>
                                        </div>
							        </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success waves-effect">Guardar Cambios</button>
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>  


    <!-- Archivos Javascript -->
   <?php Include("../includes/jsGeneral.php");?>
   
</body>
<script>
    $(document).ready(function (){
        loadDataInTable();
    });

    function loadDataInTable(){
        var tbody=$("#tableContent");
        tbody.empty();
        $.ajax("../controller/Trabajador/Trabajador.php?opc=getAll",{
            type:'POST',
            success:function(obj){
                var info="";
                console.log(obj.length);
                for(var i=0;i<obj.length;i++){
                    info+='<tr>';
                    info+='<td>'+obj[i]['Nombre']+'</td>';
                    info+='<td>'+obj[i]['DNI']+'</td>';
                    info+='<td>'+obj[i]['email']+'</td>';
                    info+='<td>'+obj[i]['Edad']+'</td>';
                    info+='<td>'+obj[i]['cell']+'</td>';
                    info+='<td>'+obj[i]['Fechas_Fin']+'</td>';
                    info+='<td>'+obj[i]['Salario']+'</td>';
                    if(obj[i]['Estado']=='1'){
                        info+='<td>Activo</td>';
                    }else if(obj[i]['Estado']=='2'){
                        info+='<td>Fin de contrato</td>';
                    }else{
                        info+='<td>Renuncia</td>';
                    }
                    info+='<td><button type="button"  data-toggle="modal" data-target="#edit" class="btn btn-info btn-circle waves-effect waves-circle waves-float">'+
                        '<i class="material-icons">edit</i>'+
                        '</button>'+
                        '<button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">'+
                        '<i class="material-icons">close</i>'+
                        '</button></td>';
                    info+='</tr>';
                }
                tbody.append(info);
                console.log(obj);
            }
        });
    }

    function eliminar(){
        swal({
        title: " Deseas eliminar?",
        text: "Estos datos se perderan pernanentemente..!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Si, obviamente!",
        closeOnConfirm: false
        }, function () {
            swal("Eliminado correctamente!", "success");
        });
    }
    
</script>
</html>
<?php
    }else{
        header("../login.php");
    }
?>