
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISIEC- PERIODOS</title>
    <link href="library/imgs/icon.png" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="library/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="library/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="library/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="library/css/style.css">
    <link rel="stylesheet" href="library/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="library/css/jquery.dataTables.min.css">
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
                           
                        </li>

                        <!-- Nav Item - Alerts -->
                     
                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                           
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                     

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
            <!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
            <!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
                           
                <div class="card">
                <div class="card-body">
                   <button type="button" class="btn btn-primary" onclick="abrirModal();"> Agregar Periodo</button> 
                <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0" id="dataTablePeriodo">
                            <thead>
                                <th>Año estudio</th>
                                <th>fecha Inicio</th>
                                <th>fecha fin </th>
                                <th>hora entrada </th>
                                <th>hora salida</th>
                                <th>estado</th>
                
                                <th>Acciones</th>
                            </thead>
                          
                        </table>
                </div>
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
                        <span>Copyright &copy; Your Website 2020</span>
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
    <div class="modal fade" id="modalRegistroPeriodo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Periodo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="formPeriodo">
            <div class="form-group">
                <div class="row">
                 
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Año de Estudio:</label>
                        <select class="custom-select form-control custom-select-sm" id="idanioestudio">
                            <option value ="0" selected>ELEGIR AÑO</option>

                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>  
                           
                    </div>
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Fecha De Inicio</label>
                        <input type="date" class="form-control" id="idfechaI">           
                    </div>
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Fecha Fin</label>
                        <input type="date" class="form-control" id="idfechaF">           
                    </div>
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Hora De Entrada</label>
                        <input type="time" class="form-control" id="idhoraE">           
                    </div>
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Hora De Salida</label>
                        <input type="time" class="form-control" id="idhoraS">           
                    </div>
                    <br>
                   
                </div>                        

            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary"  onclick="Registro();">Guardar</button>
        </div>
        </div>
    </div>
    </div>


 
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>
   <!-- Bootstrap core JavaScript-->
   <script src="library/vendor/jquery/jquery.min.js"></script>
    <script src="library/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="library/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="library/scripts/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="library/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="library/vendor/datatables/dataTables.buttons.min.js"></script>
    <script src="library/vendor/datatables/pdfmake.min.js"></script>
    <script src="library/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var editar = false;
    var idperiodo = 0;
    
    $(document).ready(function() {
        MostrarDatos();
        
    });
 
    function Registro()
    {
        //creamos nuestras variables
        var id = 0;
        if ($("#idTipodocumento").val() == '0') 
         {
           
            Swal.fire(
            'SISIEC',
            'llenar campo tipo de documento',
             'question'
            )
            return; 

         }


         if ($("#idNrdocumento").val() == '') 
         {
           
            Swal.fire(
            'SISIEC',
            'llenar campo Nmro de documento',
             'question'
            )
            return; 

         }
         if ($("#idNombre").val() == '') 
         {
            Swal.fire(
            'SISIEC',
            'llenar sus nombres',
             'question'
            )
            return; 

         }
         if ($("#idApellido").val() == '') 
         {
            Swal.fire(
            'SISIEC',
            'llenar sus apellidos',
             'question'
            )
            return; 

         }
         if ($("#idTelefono").val() == '') 
         {
            Swal.fire(
            'SISIEC',
            'llenar telefono',
             'question'
            )
            return; 

         }
         if ($("#idDireccion").val() == '') 
         {
            Swal.fire(
            'SISIEC',
            'llenar direccion',
             'question'
            )
            return; 

         }
         if ($("#idEspecialidad").val() == '0') 
         {
            Swal.fire(
            'SISIEC',
            'seleccionar especialidad',
             'question'
            )
            return; 

         }

       

        //validamos si la accion realizada es una edicion o un registro nuevo
        if(editar)
        {
            id = idperiodo ;
        }
        else{
            id = 0;
        }

        $.ajax({
                url:"../controlador/periodos.controller.php",
                type:"POST",
                data:{
                    idPeriodosp:id,
                    idanioestudio:$("#idanioestudio").val(),
                    idfechaI:$("#idfechaI").val(),
                    idfechaF:$("#idfechaF").val(),
                    idhoraE:$("#idhoraE").val(),
                    idhoraS:$("#idhoraS").val(),
                    accion:'Registrar'

                },
                success:function(data){
                    //Convertimos el resultado en Json
                    var jsorsp = JSON.parse(data);

                    if (!jsorsp.success)
                    {
                        alert(jsorsp.rpt);
                    }
                    else
                    {
                        //reiniciar variables
                        editar = false;
                        idprofe= 0;

                        alert(jsorsp.rpt);
                        //recartgar la pagina actual
                        location.reload();
                    }

                }
                });

    }
    
    function  abrirModal()
    {
        //abrir un modal
        $('#modalRegistroPeriodo').modal('show');
    }
    //Mostramos Informacion de los docentes
    function  MostrarDatos()
    {
        $.ajax({
                url:"../controlador/periodos.controller.php",
                type:"POST",
                data:{
                    accion:'consultar'

                },
                success:function(data){
                    //Convertimos el resultado en Json
                    var jsorsp = JSON.parse(data);

                    var tr= '';
                    var table = $('#dataTablePeriodo').DataTable();
                    table.destroy();
                    for(var item of jsorsp)
                    {
                          tr += `
                                <tr id="fila${item.idPeriodos}">
                                    <td>${item.anioEstudio}</td>
                                    <td>${item.fechaInicio}</td>
                                    <td>${item.fechaFin}</td>
                                    <td>${item.horaEntrada}</td>
                                    <td>${item.horaSalida}</td>`;
                                    if (item.estado==1){

                                tr += `<th  style="  background: green; text-align: center;" > <span style="color:white;font-weight: bold;"> ACTIVO</span></th>` ;
                                    }else{
                                            tr += `<th  style="  background: red; text-align: center;" > <span style="color:white;font-weight: bold;"> INACTIVO </span></th>`;

                                }
                                tr += `
                              
                                    <td>
                                            <a href="#" class="btn btn-sm btn-warning editar" 
                                                onclick="Editar(${item.idPeriodos});">
                                                    <i class="fa-solid fapen-to-square"></i>Editar                                            
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger eliminar"                                            
                                                    onclick="Eliminar(${item.idPeriodos});">
                                                <i class="fa-solid fapen-to-square"></i>Eliminar
                                            </a>
                                    </td>
                                </tr>`;    
                    }
                    $('#dataTablePeriodo tbody').html(tr);
                    $('#dataTablePeriodo').DataTable();
                }
                });
    }

    //Realizamos la apertura del modal
    function Editar(id){
            //Agregamos valor a las variables globales
            editar = true;
            idperiodo = id;
            
            //Abrimos el modal
            abrirModal();

   

            //obtenemos los valores de nuestro <tr> segun la fila  
            let obtenerFila = document.getElementById("fila"+ String(idperiodo));
            //obtenemos los valores de nuestro <td> de la fila antes obtenida
            let elementosFila = obtenerFila.getElementsByTagName("td");

            //llenasmos los valores del modal, segun los valores obtenido de nuestro td    
            $("#idanioestudio").val(elementosFila[0].innerHTML);
            $("#idfechaI").val(elementosFila[1].innerHTML);
            $("#idfechaF").val(elementosFila[2].innerHTML);
            $("#idhoraE").val(elementosFila[3].innerHTML);
            $("#idhoraS").val(elementosFila[4].innerHTML);

        
        };

  



    //Eliminar el periodo
    function Eliminar(id){
        //Agregamos valor a las variables globales



        $.ajax({
            url:"../controlador/periodos.controller.php",
            type:"POST",
            data:{
                idPeriodosp:id,
                accion:'Eliminar'
            },
            success:function(data){
                //Convertimos el resultado en Json
                var jsorsp = JSON.parse(data);

                if (!jsorsp.success)
                {
                    alert(jsorsp.rpt);
                }
                else
                {
                    //reiniciar variables
                    editar = false;
                    idperiodo= 0;

                    alert(jsorsp.rpt);
                    MostrarDatos();
                }

            }
            });
    };
</script>