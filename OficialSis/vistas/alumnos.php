
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISIEC- Alumnos</title>
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
                   <button type="button" class="btn btn-primary" onclick="abrirModal();"> Agregar Estudiante</button> 
                <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0" id="dataTableEstudiante">
                            <thead>
                                <th width="3%">Id Estudiante</th>
                                <th width="5%">imagen</th>
                                <th width="15%">Tipo Documento</th>
                                <th width="8%">Nro Documento</th>
                                <th width="10%">Nombres</th>
                                <th width="10%">Apellidos</th>
                                <th width="10%">Celular</th>
                                <th width="15%">Direccion</th>
                                <th width="5%">Estado</th>
                                <th width="19%">Acciones</th>
                            </thead>
                            <tbody style="font-size: 12px;">                           
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
    <div class="modal fade" id="modalRegistroEstudiante" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="formEstudiante">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Tipo Documento:</label>
                        <select class="custom-select form-control custom-select-sm" id="idTipodocumento">
                            <option value=0 selected>ELEGIR TIPO DOCUMENTO</option>                           
                            <option value="1">CARNET EXTRANJERIA</option>
                            <option value="2">DNI</option>
                        </select>                       
                    </div>
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Numero Documento:</label>
                        <input type="text" class="form-control" id="idNrdocumento">           
                    </div>
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Nombres:</label>
                        <input type="text" class="form-control" id="idNombre">           
                    </div>
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Apellido:</label>
                        <input type="text" class="form-control" id="idApellido">           
                    </div>
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Telefono:</label>
                        <input type="text" class="form-control" id="idTelefono">           
                    </div>
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Direccion:</label>
                        <input type="text" class="form-control" id="idDireccion">           
                    </div>
                    <div class="col-12">
                    <label for="recipient-name" class="col-form-label">Foto</label>
                    <form>
                        <div class="form-group">
                            <input type="file" id="image" class="form-control" />
                        </div>
                    </form>
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



    <div class="modal fade" id="modalRegistroMatricula" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Matricula</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>


        <div class="modal-body">
            <form id="formMatricula">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Tipo Documento:</label>
                            <select class="custom-select form-control custom-select-sm" id="idgradoyseccion">
                          

                        </select>                       
                    </div>
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Fecha de Matricula</label>
                        <input type="date" class="form-control" id="idfechaM">           
                    </div>
                   
                    <br>
                    
                </div>                        

            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary"  onclick="registrarMatricula();">Guardar</button>
        </div>
        </div>
    </div>
    </div>

    <!-- registrar permiso  -->

    <div class="modal fade" id="modalRegistropermiso" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Permisos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="formUsuario">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Tipo de Permiso:</label>
                        <select class="custom-select form-control custom-select-sm" id="idTipopermiso">
                            <option value=0 selected>TIPO DE PERMISOS</option>                           
                            <option value="2">Permisos por salud</option>
                            <option value="3">Otros</option>
                        </select>                       
                    </div>
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Fecha de permiso</label>
                        <input type="date" class="form-control" id="idfechapermiso">           
                    </div>
                    
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Hora del permiso</label>
                        <input type="time" class="form-control" id="idHorapermiso">           
                    </div>
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Entra o salida</label>
                        <select class="custom-select form-control custom-select-sm" id="identrada_salida">
                            <option value=0 selected>TIPO </option>                           
                            <option value="E">entrada</option>
                            <option value="S">salida</option>
                        </select>                       
                    </div>
                    
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Motivo del permiso</label>
                        <input type="text" class="form-control" id="idmotivo">           
                    </div>
                   
                 

                 
                 
                  
                    <br>
                    
                </div>                        

            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary"  onclick="Registropermiso();">Guardar</button>
        </div>
        </div>
    </div>
    </div>




 
<!-- --------------------------------------------------------------------------------------------------------------------------------------------- -->
</body>
</html>
   <!-- Bootstrap core JavaScript-->
   <script src="library/vendor/jquery/jquery.min.js"></script>
   <script src="library/vendor/jquery/jquery-3.2.1.min.js"></script>
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

<script>
    var editar = false;
    var idestudiante= 0;
    var idmatricula=0;
    $(document).ready(function() {
        MostrarDatos();
        aulayseccion();
        
    });

    //PERMISOS

    function permisos(idEstudiantep,idmatriculap)
        {
            idestudiante = idEstudiantep;
            idmatricula = idmatriculap;
            
            abrilModalpermiso();
        } 
    function Registropermiso()
        {
            //creamos nuestras variables
            var id = 0;

            //validamos si la accion realizada es una edicion o un registro nuevo
            if(editar)
            {
                id = idpermi;
            }
            else{
                id = 0;
            }

            $.ajax({
                    url:"../controlador/permisos.controller.php",
                    type:"POST",
                    data:{
                        idPermiso:id,
                        idtipopermiso:$("#idTipopermiso").val(),
                        idmatricula:idmatricula,
                        idmotivo:$("#idmotivo").val(),
                        idfechapermiso:$("#idfechapermiso").val(),
                        idHorapermiso:$("#idHorapermiso").val(),
                        entrada_salida:$("#identrada_salida").val(),
                    
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
                            idpermi= 0;

                            alert(jsorsp.rpt);
                            //recartgar la pagina actual
                            location.reload();
                        }

                    }
                    });

        }
    //FIN PERMISOS
 
    function Registro()
        {
            //creamos nuestras variables
            var id = 0;

            //validamos si la accion realizada es una edicion o un registro nuevo
            if(editar)
            {
                id = idestudiante;
            }
            else{
                id = 0;
            }

            //creamos una variable para almacenar todos los atributos de mi #image
            var image = $('#image');

            //obtenemos el archivo seleccionado
            var image_data = image.prop('files')[0];




            var formData = new FormData();

            formData.append('idEstudiante', id);
            formData.append('idtipodocumento', $("#idTipodocumento").val());
            formData.append('idNrdocumento', $("#idNrdocumento").val());
            formData.append('idNombre', $("#idNombre").val());
            formData.append('idApellido', $("#idApellido").val());
            formData.append('idTelefono',$("#idTelefono").val());
            formData.append('idDireccion',$("#idDireccion").val());
            formData.append('image', image_data);
            formData.append('accion', 'Registrar');


            $.ajax({
                    url:"../controlador/alumnos.controller.php",
                    type:"POST",
                    contentType:false,
                    cache: false,
                    processData: false,
                    data:formData,
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
                            //recartgar la pagina actual
                            location.reload();
                        }

                    }
                    });

        }
   
    function  abrirModal()
        {
        //abrir un modal
        $('#modalRegistroEstudiante').modal('show');
        }

    function  abrirModalmatri()
        {
        //abrir modal matricula
        $('#modalRegistroMatricula').modal('show');
        }
    function abrilModalpermiso()
        {
            $('#modalRegistropermiso').modal('show');
        }
        


//MATRICULA
    function aulayseccion(){
        $.ajax({
                url:"../controlador/aulaseccion.controller.php",
                type:"POST",
                data:{
                    accion:'consultar'

                },
                success:function(data){
                    //Convertimos el resultado en Json
                    var jsorsp = JSON.parse(data);

                    var tr= '<option value=0 selected>Grado y Sección</option>';
                    for(var item of jsorsp)
                    {
                        //traer las secciones
                        tr +=`
                            <option value="${item.idAulaPeriodo}">${item.grado}°${item.seccion} </option>
                        `;


                    }
                    $('#idgradoyseccion').html(tr);

                }
                });




    }    


    function matricular(idEstudiantem)
        {
            idestudiante = idEstudiantem;
            abrirModalmatri();
        } 
    function registrarMatricula() {

        console.log(idestudiante);
        console.log($("#idgradoyseccion").val());



        $.ajax({
            url:"../controlador/matricula.controller.php",
            type:"POST",
            data:{
                idEstudiante:idestudiante,
                idgradoyseccion:$("#idgradoyseccion").val(),
                idfechaM:$("#idfechaM").val(),
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
                idestudiante= 0;

                alert(jsorsp.rpt);
                //recartgar la pagina actual
                location.reload();
            }

        }
        });

    }
//FIN MATRICULA

    //Mostramos Informacion de los estudiantes
    function  MostrarDatos()
        {
        $.ajax({
                url:"../controlador/alumnos.controller.php",
                type:"POST",
                data:{
                    accion:'consultar'

                },
                success:function(data){
                    //Convertimos el resultado en Json
                    var jsorsp = JSON.parse(data);

                    var tr= '';
                    var table = $('#dataTableEstudiante').DataTable();
                    table.destroy();
                    for(var item of jsorsp)
                    {
                        var stilobotonMatricula="";
                        if (item.idmatricula  != 0)
                        {
                            stilobotonMatricula =`style ="display: none"`;
                        }

                          tr += `
                                <tr id="fila${item.idEstudiante}">
                                    <td width="3%">${item.idEstudiante}</td>
                                    <td width="5%"><img src="${item.img}" style="width:30px ; height:30px;" alt=""></td>
                                    <td width="5%">${item.descripcion}</td>
                                    <td width="8%">${item.nroDocumento}</td>
                                    <td width="10%">${item.nombres}</td>
                                    <td width="10%">${item.apellidos}</td>
                                    <td width="10%">${item.celular}</td>
                                    <td width="15%">${item.direccion}</td>`;
                                    if (item.estado==1){

                                          tr += `<td  width="5%" style="  background: green; text-align: center;" > <span style="color:white;font-weight: bold;" class="estado"> ACTIVO</span></td>` ;
                                    }else{
                                        tr += `<td  width="5%" style="  background: red; text-align: center;" > <span style="color:white;font-weight: bold;" class="estado"> INACTIVO </span></td>`;

                                    }
                                    
                                    tr += `

                                    <td width=25%">
                                            <a href="#" class="btn btn-sm btn-primary editar btnAccion" 
                                                onclick="permisos(${item.idEstudiante},${item.idmatricula});">
                                                    <i class="fa-solid fapen-to-square"></i>Permiso                                          
                                            </a>
                                            <a href="#" class="btn btn-sm btn-success editar btnAccion" ${stilobotonMatricula} 
                                                onclick="matricular(${item.idEstudiante});">
                                                    <i class="fa-solid fapen-to-square"></i>Matricular                                           
                                            </a>
                                            <a href="#" class="btn btn-sm btn-warning editar btnAccion" 
                                                onclick="Editar(${item.idEstudiante},${item.idtipodocumento});">
                                                    <i class="fa-solid fapen-to-square"></i>Editar                                            
                                            </a>
                                            <a href="#" class="btn btn-sm btn-danger eliminar btnAccion"                                            
                                                    onclick="Eliminar(${item.idEstudiante});">
                                                <i class="fa-solid fapen-to-square"></i>Eliminar
                                            </a>
                                    </td>
                                </tr>`;    

                    }
                    $('#dataTableEstudiante tbody').html(tr);
                    $('#dataTableEstudiante').DataTable();
                }
                });
        }

    //Realizamos la apertura del modal
    function Editar(id,idtipodoc,idespec){
            //Agregamos valor a las variables globales
            editar = true;
            idestudiante = id;
            
            //Abrimos el modal
            abrirModal();

            //Llenamos nuestras variables de tipo doc y especialidad
            var vidtipodoc  = idtipodoc;


            //obtenemos los valores de nuestro <tr> segun la fila  
            let obtenerFila = document.getElementById("fila"+ String(idestudiante));
            //obtenemos los valores de nuestro <td> de la fila antes obtenida
            let elementosFila = obtenerFila.getElementsByTagName("td");

            //llenasmos los valores del modal, segun los valores obtenido de nuestro td    
            $("#idTipodocumento").val(vidtipodoc);
            $("#idNrdocumento").val(elementosFila[2].innerHTML);
            $("#idNombre").val(elementosFila[3].innerHTML);
            $("#idApellido").val(elementosFila[4].innerHTML);
            $("#idTelefono").val(elementosFila[5].innerHTML);
            $("#idDireccion").val(elementosFila[6].innerHTML);
        
        };


    //Eliminar el estudiante
    function Eliminar(id){
        //Agregamos valor a las variables globales
        editar = true;
        idestudiante = id;

        $.ajax({
            url:"../controlador/alumnos.controller.php",
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