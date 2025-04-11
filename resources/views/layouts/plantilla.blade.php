<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Computer Keeper</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
                <div class="sidebar-brand-icon">
                    <img src="{{ asset('img/Logosky.png') }}" alt="Logo de la empresa"
                        style="width: 180px; height: 150px; object-fit: contain; float: right; transform: rotate(0deg); transform-origin: top right;">
                </div>
            </a>




            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Computer Keeper</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menú
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            @can('VerServicio')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Servicios</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item" href="{{ url('servicio') }}" href="buttons.html">Servicios</a>
                        @can('CrearServicio')
                        <a class="collapse-item" href="{{ url('servicio/create') }}" href="cards.html">Insertar servicio</a>
                        @endcan
                    </div>
                </div>
            </li>
            @endcan

            <!-- Nav Item - Utilities Collapse Menu -->
            @can('VerEquipo')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Equipos</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item"href="{{ url('equipo') }}" href="utilities-color.html">Equipos</a>
                        @can('CrearEquipo')
                        <a class="collapse-item" href="{{ url('equipo/create') }}"href="utilities-border.html">Insertar equipos</a>
                        @endcan
                    </div>
                </div>
            </li>
            @endcan

            <!-- Nav Item - Utilities Collapse Menu -->
            @can('VerEmpresa')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEmpresas"
                    aria-expanded="true" aria-controls="collapseEmpresas">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Empresas</span>
                </a>
                <div id="collapseEmpresas" class="collapse" aria-labelledby="headingEmpresas"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item" href="{{ url('empresa') }}" href="utilities-color.html">Empresas</a>
                        @can('CrearEmpresa')
                        <a class="collapse-item" href="{{ url('empresa/create') }}" href="utilities-border.html">Insertar empresas</a>
                        @endcan
                    </div>
                </div>
            </li>
            @endcan

            @can('VerCliente')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseClientes"
                    aria-expanded="true" aria-controls="collapseClientes">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Clientes</span>
                </a>
                <div id="collapseClientes" class="collapse" aria-labelledby="headingClientes"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item" href="{{ url('cliente_particular') }}"
                            href="utilities-color.html">Cliente particular</a>
                        <a class="collapse-item" href="{{ url('cliente_empresarial') }}"
                            href="utilities-border.html">Cliente
                            empresarial</a>

                    </div>
                </div>
            </li>
            @endcan

            @can('VerTecnico')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTecnicos"
                    aria-expanded="true" aria-controls="collapseTecnicos">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Técnicos</span>
                </a>
                <div id="collapseTecnicos" class="collapse" aria-labelledby="headingTecnicos"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opciones:</h6>
                        <a class="collapse-item" href="{{ url('tecnico') }}"
                            href="utilities-color.html">Tecnicos</a>
                        @can('CrearTecnico')
                        <a class="collapse-item" href="{{ url('tecnico/create') }}" href="utilities-border.html">Insertar tecnico</a>
                        @endcan
                    </div>
                </div>
            </li>
            @endcan

            <!-- Divider -->
            <hr class="sidebar-divider">

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
                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile img-usuario" src="{{ asset('img/undraw_profile.svg') }}" alt="Imagen del usuario">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">                           
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Computer Keeper</h1>
                        <a href="{{ url('/generar-reporte') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                            <i class="fas fa-download fa-sm text-white-50"></i> Generar reporte</a>
                    </div>

               
                        <div class="card-body">

                            @yield('tarjetas')

                        </div>

                

                        <div class="card mb-4">
                            <div class="card-body">

                                @yield('contenido')

                            </div>
                        </div>

                        <!-- Footer -->
                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Copyright &copy; Computer Keeper 2025</span>
                                </div>
                            </div>
                        </footer>
                        <!-- End of Footer -->

                    

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="login.html">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap core JavaScript-->
                <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

                <!-- Custom scripts for all pages-->
                <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
                <!-- Page level plugins -->
                <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
                <!-- Page level custom scripts -->
                <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
                <script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>


                <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
                <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
                <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
                <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
                @yield('script2jj')
</body>

</html>
