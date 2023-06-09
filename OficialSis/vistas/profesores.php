
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SISIEC- DOCENTES</title>
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
                <a class="nav-link collapsed" href="#"  data-target="#collapseUtilities"
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
                    
                    <button type="button" class="btn btn-primary" onclick="abrirModal();"> Agregar Profesor</button> 
                  
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0" id="dataTableDocente">
                            <thead>
                                <th width="15%"> Tipo Documento</th>
                                <th width="8%">Nro Documento</th>
                                <th width="10%">Nombres</th>
                                <th width="10%">Apellidos</th>
                                <th width="10%">Celular</th>
                                <th width="4%">Direccion</th>
                                <th width="15%">Especialidad</th>
                                <th width="15%">Usuario</th>
                                <th>Acciones</th>
                            </thead>
                          
                        </table>
                </div>
                </div>
                </div>
                <div class="card" id="cardregistrousuario" style="display: none;">
                    <div class="card-body">
                           <div class="row">
                            <div class="col-3">
                                <label > Persona </label>
                                <input type="text">
                            </div>
                            <div class="col-3">
                                <label > Tipo Usuario </label>
                                <select class="form-select"  id="selTipo">
                                    <option value="0">-- Seleccionar -- </option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Alumno</option>
                                </select>
                            </div>
                            <div class="col-3">
                                <label> Usuarios</label>
                                <input type="text">
                            </div>
                            <div class="col-3">
                                <label > Password</label>
                                <input type="text">
                            </div>
                            <div class="col-12">
                            <button type="button" class="btn btn-primary"  onclick="RegistroUsuario();">Guardar</button>

                                <button class="btn bg-gradient-danger" onclick="Listar()" style="color:#fff;">cancelar</button>
                            </div>
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
    <div class="modal fade" id="modalRegistrousuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registrar Usuario</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="formUsuario">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Tipo de Usuario:</label>
                        <select class="custom-select form-control custom-select-sm" id="idTipoUsuario">
                            <option value=0 selected>ELEGIR TIPO USUARIO</option>                           
                            <option value="1">ADMIN</option>
                            <option value="2">ESTUDANTE</option>
                        </select>                       
                    </div>
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Usuario:</label>
                        <input type="text" class="form-control" id="idUsuarioNombre">           
                    </div>
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Contraseña:</label>
                        <input type="text" class="form-control" id="idcontra">           
                    </div>
                 
                  
                    <br>
                    
                </div>                        

            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary"  onclick="RegistroUsuario();">Guardar</button>
        </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="modalRegistroProfesor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">RegistrarProfesor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="formProfesor">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label for="recipient-name" class="col-form-label">Tipo Documento:</label>
                        <select class="custom-select form-control custom-select-sm" id="idTipodocumento">
                            <option value="0" selected>ELEGIR TIPO DOCUMENTO</option>                           
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
                    <br>
                    <div class="col-12">
                        <label for="recipient-name" class="col-form-label">Especialidad:</label>
                        <select class="custom-select form-control custom-select-sm" id="idEspecialidad">
                            <option value ="0" selected>ELEGIR ESPECIALIDAD</option>
                            <option value="1">INGLÉS</option>
                            <option value="2">RELIGION</option>
                            <option value="3">MATEMÁTICA</option>
                            <option value="4">COMUNICACIÓN</option>
                            <option value="5">C.T.A</option>
                            <option value="6">P.F.R.H</option>
                            <option value="7">COMPUTACIÓN</option>

                        </select>           
                    </div>
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
    var idprofe = 0;
    var idperson=0;


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
            id = idprofe;
        }
        else{
            id = 0;
        }

        $.ajax({
                url:"../controlador/Docente.controller.php",
                type:"POST",
                data:{
                    idprofesor:id,
                    idtipodocumento:$("#idTipodocumento").val(),
                    idNrdocumento:$("#idNrdocumento").val(),
                    idNombre:$("#idNombre").val(),
                    idApellido:$("#idApellido").val(),
                    idTelefono:$("#idTelefono").val(),
                    idDireccion:$("#idDireccion").val(),
                    idEspecialidad:$("#idEspecialidad").val(),
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
    function RegistroUsuario(){

            if ($("#idTipoUsuario").val() == '0') 
                {
                
                    Swal.fire(
                    'SISIEC',
                    'llenar campo tipo de usuario',
                    'question'
                    )
                    return; 

                }


         if ($("#idUsuarioNombre").val() == '') 
            {
            
                Swal.fire(
                'SISIEC',
                'llenar nombre de usuario',
                'question'
                )
                return; 

            }
         if ($("#idcontra").val() == '') 
            {
                Swal.fire(
                'SISIEC',
                'llenar contraseña',
                'question'
                )
                return; 

         }
         $.ajax({
            url:"../controlador/usuario.controller.php",
                type:"POST",
                data:{
                    idusuario:0,
                    idUsuarioN:$("#idUsuarioNombre").val(),
                    idcontra:$("#idcontra").val(),
                    idtipousuario:$("#idTipoUsuario").val(),
                    idpersona:idperson,
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
            $('#modalRegistroProfesor').modal('show');
        }
    function  abrirModalusuario()
        {
            //abrir un modal
            $('#modalRegistrousuario').modal('show');
        }
    //Mostramos Informacion de los docentes
    function  MostrarDatos()
        {
            $.ajax({
                    url:"../controlador/Docente.controller.php",
                    type:"POST",
                    data:{
                        accion:'consultar'

                    },
                    success:function(data){
                        //Convertimos el resultado en Json
                        var jsorsp = JSON.parse(data);

                        var tr= '';
                        var table = $('#dataTableDocente').DataTable();
                        table.destroy();
                        for(var item of jsorsp)
                        {
                            tr += `
                                    <tr id="fila${item.idprofesor}">
                                        <td width="5%">${item.descripcion}</td>
                                        <td width="5%">${item.nroDocumento}</td>
                                        <td width="5%">${item.nombres}</td>
                                        <td width="15%">${item.apellidos}</td>
                                        <td width="10%">${item.celular}</td>
                                        <td width="15%">${item.direccion}</td>
                                        <td width="15%">${item.especialidad}</td>
                                        <td width="10%">${item.usuario}</td>
                                    
                                        <td width=25%> 
                                                <a href="#" class="btn btn-sm btn-warning editar" 
                                                    onclick="Editar(${item.idprofesor},${item.idtipodocumento},${item.idespecialidad});">
                                                        <i class="fa-solid fapen-to-square"></i>Editar                                            
                                                </a>
                                       
                                                <a href="#" class="btn btn-sm btn-danger eliminar"                                            
                                                        onclick="Eliminar(${item.idprofesor});">
                                                    <i class="fa-solid fapen-to-square"></i>Eliminar
                                                </a>`;

                                                if (item.usuario==''){
                                                    tr +=`<a href="#" class="btn btn-sm btn-warning editar" 
                                                    onclick="crearusuario(${item.idPersona});">
                                                        <i class="fa-solid fapen-to-square"></i>crear usuario                                            
                                                    </a> `

                                                }
                                                

                                                tr += ` </td>
                                    </tr> `;   
                        }
                        $('#dataTableDocente tbody').html(tr);
                        $('#dataTableDocente').DataTable();
                    }
                    });
        }
    function crearusuario(idPersona){
        idperson = idPersona;
        abrirModalusuario();

    }
    //Realizamos la apertura del modal
    function Editar(id,idtipodoc,idespec){
            //Agregamos valor a las variables globales
            editar = true;
            idprofe  = id;
            
            //Abrimos el modal
            abrirModal();

            //Llenamos nuestras variables de tipo doc y especialidad
            var vidtipodoc  = idtipodoc;
            var videspec = idespec;

            //obtenemos los valores de nuestro <tr> segun la fila  
            let obtenerFila = document.getElementById("fila"+ String(idprofe));
            //obtenemos los valores de nuestro <td> de la fila antes obtenida
            let elementosFila = obtenerFila.getElementsByTagName("td");

            //llenasmos los valores del modal, segun los valores obtenido de nuestro td    
            $("#idTipodocumento").val(vidtipodoc);
            $("#idNrdocumento").val(elementosFila[1].innerHTML);
            $("#idNombre").val(elementosFila[2].innerHTML);
            $("#idApellido").val(elementosFila[3].innerHTML);
            $("#idTelefono").val(elementosFila[4].innerHTML);
            $("#idDireccion").val(elementosFila[5].innerHTML);
            $("#idEspecialidad").val(videspec);
        
        };

        function verificar_campos() {
             var text=document.forms[0].firstname.value.length;
                if(text==0) {
        document.forms[0].firstname.focus();
        alert("Debes ingresar el nombre");
        return false;
        }else{
        document.forms[0].submit();
    }
}



    //Eliminar el Docente
    function Eliminar(id){
        //Agregamos valor a las variables globales
        editar = true;
        idprofe  = id;

        $.ajax({
            url:"../controlador/Docente.controller.php",
            type:"POST",
            data:{
                idprofesor:idprofe,
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
                    idprofe= 0;

                    alert(jsorsp.rpt);
                    MostrarDatos();
                }

            }
            });
    };
</script>