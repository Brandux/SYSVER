<!DOCTYPE html>
<html>
<head>
   <?php Include("includes/head.php"); ?>
</head>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Cargando...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">Buscar</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="WORKERS.html">VERNIE ARCHITECT</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <li><a href="Login.html"  data-close="true"><i class="material-icons">power_settings_new</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menú</li>
                    <li class="active">
                        <a href="WORKERS.html">
                            <i class="material-icons">work</i>
                            <span>Trabajadores</span>
                        </a>
                    </li>
                    <li>
                        <a href="PROYECTOS.html">
                            <i class="material-icons">content_paste</i>
                            <span>Proyectos</span>
                        </a>
                    </li>
                    <li>
                        <a href="CATEGORIAS.html">
                            <i class="material-icons">attach_file</i>
                            <span>Categorias</span>
                        </a>
                    </li>
                    <li>
                        <a href="FILIA.html">
                            <i class="material-icons">account_balance</i>
                            <span>Filial</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">VERNIE - SYSVER</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>
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
                                              <button type="button"  class="btn bg-blue btn-circle-lg waves-effect waves-circle waves-float">
                                                    <i class="material-icons">add</i>
                                                </button>
                                            <br><br>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre y apellido </th>
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
                                                            <th>Nombre y apellido </th>
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
                                                    <tbody>
                                                          
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
                                                                 <button type="button"  onclick="eliminar()" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
                                                                 <button type="button"  onclick="eliminar()" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
    <!-- Archivos Javascript -->
   <?php Include("includes/jsGeneral.php");?>
</body>
<script>
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