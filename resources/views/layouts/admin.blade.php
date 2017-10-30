<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistel-Network | Administrador </title>
        <link href="{{ url('/assets/admin/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/assets/admin/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">
        <!-- Timeline CSS -->
        <link href="{{ url('/assets/admin/css/timeline.css') }}"" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{ url('/assets/admin/css/sb-admin-2.css') }}" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="{{ url('/assets/admin/morrisjs/morris.css') }}" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="{{ url('/assets/css/dataTables.bootstrap.css') }}" rel="stylesheet">
        <!-- DataTables Responsive CSS -->
        <link href="{{ url('/assets/css/dataTables.responsive.css')}}" rel="stylesheet">
        <link href="{{ url('/assets/admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <script src="{{ url('/assets/js/jquery.min.js') }}"></script>
        <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('/assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ url('/assets/js/morrisjs/morris.min.js')}}"></script>
        <script src="{{ url('/assets/js/sb-admin-2.js') }}"></script>
        <script src="{{ url('/assets/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('/assets/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ url('/assets/js/dataTables.responsive.js') }}"></script>
    </head>
    <body>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:#23648c;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                       <a href="{{url('/admin')}}"> <img src="{{ url('/assets/img/logo1.png')}}" alt="logo"> </a>
                    </div>
                    <!-- <a class="navbar-brand" href="index.html">Sistel-Network</a> -->
                </div>
                <ul class="nav navbar-top-links navbar-right"> 
                    Usuario:
                    <li class="dropdown">
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #fff;">
                            <span>Administrador </span><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil del usuario</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Herramientas</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="{{url('/admin/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesion</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Cargos<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('admin/carg/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/admin/carg')}}"><i class='fa fa-list-ol fa-fw'></i> Cargos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Categorias<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('/admin/cat/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/cat') }}"><i class='fa fa-list-ol fa-fw'></i> categorias</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Marcas<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('/admin/marc/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/marc') }}"><i class='fa fa-list-ol fa-fw'></i> Marcas</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('/admin/users/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/users')}}"><i class='fa fa-list-ol fa-fw'></i> Usuarios</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Empleados<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('/admin/empl/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/admin/empl')}}"><i class='fa fa-list-ol fa-fw'></i> Empleados</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Clientes<span class=" fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('/admin/client/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/admin/client')}}"><i class='fa fa-list-ol fa-fw'></i> Clientes</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i>Proveedores<span class=" fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('/admin/prove/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/prove') }}"><i class='fa fa-list-ol fa-fw'></i> proveedores</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i>Productos<span class=" fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('/admin/produc/create')}}"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                    </li>
                                    <li>
                                        <a href="{{url('/admin/produc')}}"><i class='fa fa-list-ol fa-fw'></i> Productos</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i>Servicios<span class=" fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="#"><i class='fa fa-plus fa-fw'></i> Agregar</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class='fa fa-list-ol fa-fw'></i> Servicios</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i>Solicitudes<span class=" fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="{{url('admin/soli-presu')}}"><i class='fa fa-list-ol fa-fw'></i> Ver listado</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div id="page-wrapper">
                @yield('content')
            </div>
        </div>
        <footer id="footer" class="midnight-blue" style="background-color:#23648c">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                            © 2016 Sistel-Network S.A de C.V. Todos los derechos Reservados.
                     </div>
                     <div class="col-sm-6">
                          <ul class="pull-right">
                              <li><strong>Tel.(77) 13418776</strong></li>
                              <li> | </li>                         
                              <li><a href="#">Inicio</a></li>
                           </ul>
                    </div>
                </div>
            </div>
        </footer><!--/#footer-->
    </body>
</html>