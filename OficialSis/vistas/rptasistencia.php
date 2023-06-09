
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISIEC-Asistencia Reporte</title>
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
            
                <a class="nav-link collapsed" href="../vistas/Usuarios.php" data-target="#collapseUtilities"   >
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


                    
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">ADMIN</span>
                                <img class="img-profile rounded-circle" src="./library/imgs/icon.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" >
                           
                                
                                <a class="dropdown-item" href="../vistas/index.php" data-toggle="modal" >
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw text-gray-400" href="../vistas/index.php"></i>
                                    Cerrar Sesión
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
                <div class="table-responsive">
                <div class="col-md-6">
                <a class="btn btn-info"  href="reporteExcel.php">Exportar Excel </a>      

                
                </div>
                <br>
                <div class="row">
                    <div class="col-2">
                    <input type="date" id="idfechaFiltro" class="form-control">              
                    </div>
                    <div class="col-2">
                        <select class="form-select form-control" aria-label="Default select example" id="idEntrSal">
                            <option value="T" selected>Seleccionar Todos</option>
                            <option value="E">Entradas</option>
                            <option value="S">Salida</option>
                        </select>
                    </div> 
                    <div class="col-2">
                        <select class="form-select form-control" aria-label="Default select example" id="idGrado">
                            <option value="0" selected>Grado</option>
                            <option value="1">Primero</option>
                            <option value="2">Segundo</option>
                            <option value="3">Tercero</option>
                            <option value="4">Cuarto</option>
                            <option value="5">Quinto</option>
                            
                        </select>
                    </div> 
                    <div class="col-2">
                        <select class="form-select form-control" aria-label="Default select example" id="idSeccion">
                            <option value="S" selected>Seccion</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                       
                            
                        </select>
                    </div>
                </div>
                <br>
                        <table class="table table-bordered" width="100%" cellspacing="0" id="dataTableAsistencia">
                            <thead>
                                <th>Nombres</th>
                                <th>apellidos</th>
                                <th>Hora de Registo</th>
                                <th>Minutos tardios</th>
                                <th>Fecha</th>
                                <th>Entrada o Salida </th>
                                <th>Grado</th>
                                <th>Seccion</th>
                          
                            </thead>
                            <tbody>                           
                            </tbody>
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
    <!--  botones datatabkle-->

<script>
   
    var editar = false;
    var idusu= 0;
    $(document).ready(function() {
        MostrarDatos();
      
       
    });
   
 
    function Registro()
    {
        //creamos nuestras variables
        var id = 0;

        //validamos si la accion realizada es una edicion o un registro nuevo
        if(editar)
        {
            id = idusu;
        }
        else{
            id = 0;
        }

        $.ajax({
                url:"../controlador/usuario.controller.php",
                type:"POST",
                data:{
                    idusuario:id,
                    idUsuarioN:$("#idUsuarioNombre").val(),
                    idcontra:$("#idcontra").val(),
                    idtipousuario:$("#idTipoUsuario").val(),
                    idpersona:0,
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
                        idusu= 0;

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
        $('#modalRegistroUsuario').modal('show');
        }


    //Mostramos Informacion de los usuarios
    $("#idfechaFiltro").change(function(){
        MostrarDatos();
    })
    $("#idEntrSal").change(function(){
        MostrarDatos();
    })
    $("#idGrado").change(function(){
        MostrarDatos();
    })
    $("#idSeccion").change(function(){
        MostrarDatos();
    })
    function  MostrarDatos()
    {
        $.ajax({
                url:"../controlador/rptasistencia.controller.php",
                type:"POST",
                data:{
                    accion:'consultar',
                    fechaFiltro: $('#idfechaFiltro').val(),
                    esFiltro:$('#idEntrSal').val(),
                    gradoFiltro:$('#idGrado').val(),
                    seccionFiltro:$('#idSeccion').val()
                },
                success:function(data){
                    //Convertimos el resultado en Json
                    var jsorsp = JSON.parse(data);
                    

                    var tr= '';
                    var table = $('#dataTableAsistencia').DataTable();
                    table.destroy();
                    for(var item of jsorsp)
                    {
                          tr += `
                                <tr id="fila${item.idAsistencia}">
                                    <td>${item.nombres}</td>
                                    <td>${item.apellidos}</td>
                                    <td>${item.horaRegistro}</td>
                                    <td>${item.minTardanza}</td>
                                    <td>${item.fecha}</td>
                                    <td>${item.e_s}</td>
                                    <td>${item.grado}</td>
                                    <td>${item.seccion}</td>`;

                                   
                                    
                                    tr += `

                                </tr>`;    

                    }
                    $('#dataTableAsistencia tbody').html(tr);
                    $('#dataTableAsistencia').DataTable();
                }
                });
    }

    //Realizamos la apertura del modal
    function Editar(id,idtipousuario){
            //Agregamos valor a las variables globales
            editar = true;
            idusu = id;
            
            //Abrimos el modal
            abrirModal();

            //Llenamos nuestras variables de tipo doc y especialidad
            var vidtipousuario= idtipousuario;


            //obtenemos los valores de nuestro <tr> segun la fila  
            let obtenerFila = document.getElementById("fila"+ String(idusu));
            //obtenemos los valores de nuestro <td> de la fila antes obtenida
            let elementosFila = obtenerFila.getElementsByTagName("td");

            //llenasmos los valores del modal, segun los valores obtenido de nuestro td    
            $("#idTipoUsuario").val(vidtipousuario);
            $("#idUsuario").val(elementosFila[1].innerHTML);
            $("#idnombre").val(elementosFila[2].innerHTML);
        
        };


    //Eliminar el estudiante
    function Eliminar(id){
        //Agregamos valor a las variables globales
        editar = true;
        idusuario = id;

        $.ajax({
            url:"../controlador/usuario.controller.php",
            type:"POST",
            data:{
                idEstudiante:idestudiante,
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
                    idestudiante= 0;

                    alert(jsorsp.rpt);
                    MostrarDatos();
                }

            }
            });
    };
</script>