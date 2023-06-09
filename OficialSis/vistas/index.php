<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISIEC - Dashboard</title>
    <link href="library/imgs/icon.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="library/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="library/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../vistas/index.php">
                <div class="sidebar-brand-icon ">
                <i class="fas fa-school"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SISIEC </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->

            
            <li class="nav-item active">
                <a class="nav-link">

                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="../vistas/asistencia.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Marcaciones</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
              
                <a class="nav-link collapsed" href="../vistas/Usuarios.php"  data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user-alt"></i>
                    <span>Usuarios</span>
                </a>
              
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="../vistas/periodo.php">
                    <i class="fas fa-calendar"></i>
                    <span>Periodo Escolar</span>
                </a>
  
            </li>
         
            <li class="nav-item">
                <a class="nav-link collapsed" href="../vistas/profesores.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user-circle"></i>
                    <span>Docentes</span>
                </a> 
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../vistas/alumnos.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Alumnos</span>
                </a>
             
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../vistas/rptasistencia.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-tasks"></i>
                    <span>Asistencias</span>
                </a>
             
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="../vistas/permisos.php"  data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-th-list"></i>
                    <span>Permisos</span>
                </a>
             
            </li>

        
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

   
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

             

                        <!-- Nav Item - Messages -->
                   

                        <div class="topbar-divider d-none d-sm-block"></div>

                

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" id="idMarcacionEntrada">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Marcaciones de Ingresos</div>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" id="idMarcacionSalida">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Marcaciones de Salidas</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Almunos Asistencia
                                            </div>
                                            <div class="row no-gutters align-items-center" id="idalumnosingresados">
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2" id="idtardanza">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Marcacion Tardanzas</div>
                                           
                                        </div>
                                        <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-5 col-lg-4">
                            <div class="card shadow mb-3">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Resumen de Tardanzas</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Dropdown Header:</div>
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4">
                                <div class="card-header py-4">
                                    <h6 class="m-0 font-weight-bold text-primary">Resumen del Mes Vigente</h6>
                                </div>
                                <div class="card-body" id="idfaltas">
                                    
                                    
                                </div>
                            </div>

                        <!-- Pie Chart -->
                     
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-5">

                            <!-- Project Card Example -->
                           

                            <!-- Color System -->
                        

                        </div>

                  
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="library/vendor/jquery/jquery.min.js"></script>
    <script src="library/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="library/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="library/scripts/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="library/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="library/scripts/js/demo/chart-area-demo.js"></script>
    <script src="library/scripts/js/demo/chart-pie-demo.js"></script>

</body>

</html>
<script>
      $(document).ready(function(){
        Mostrar();
      });
   

function  Mostrar(){
        $.ajax({
                url:"../controlador/dashboard.controller.php",
                type:"POST",
                data:{
                  accion:'consultar'
                },
                success:function(data){
                  var jsorsp = JSON.parse(data);               
                  $('#idMarcacionEntrada').append(`<div class="h5 mb-0 font-weight-bold text-gray-800">${jsorsp.marcasionesIngreso}</div>`)
                  $('#idMarcacionSalida').append(`<div class="h5 mb-0 font-weight-bold text-gray-800">${jsorsp.marcasionesSalida}</div>`)
                  $('#idalumnosingresados').append(`<div class="col-auto" >
                                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">${jsorsp.porcINgresados}</div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="progress progress-sm mr-2">
                                                            <div class="progress-bar bg-info" role="progressbar"
                                                                style="width: ${jsorsp.porcINgresados}%" aria-valuenow="${jsorsp.porcINgresados}" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div> `);
                  $('#idtardanza').append(` <div class="h5 mb-0 font-weight-bold text-gray-800">${jsorsp.marcasionesTardanza}</div>`)
                  $('#idfaltas').append(` 
                                        <h4 class="small font-weight-bold">Asistencia<span class="float-right">${jsorsp.porcINgresados}%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: ${jsorsp.porcINgresados}%"  aria-valuenow="${jsorsp.porcINgresados}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold" >Faltas <span class="float-right">${jsorsp.porcFalta}%</span> </h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: ${jsorsp.porcFalta}%"
                                                aria-valuenow="${jsorsp.porcFalta}" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <h4 class="small font-weight-bold">Tardanzas <span
                                                class="float-right">0%</span></h4>
                                        <div class="progress mb-4">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 0%"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        `);
                  
                                                    
                }
              });
            }

</script>