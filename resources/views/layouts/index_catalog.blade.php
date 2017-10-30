<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistel-Network catalog</title>
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- <link rel="stylesheet" href="{{ url('/assets/css/main.css') }}"> -->
        <link rel="stylesheet" href="{{ url('/assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{url('/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/sb-admin-2.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/assets/css/timeline.css')}}">
        <link href="{{ url('/assets/admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <script src="{{ url('/assets/js/jquery.js') }}"></script>
        <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{url('/assets/js/index.js')}}"></script>
        <script src="{{ url('/assets/js/jquery.flexisel.js') }}"></script>
        <script src="{{ url('/assets/js/fancywebsocket.js')}}"></script>
        <script src="{{ url('/assets/js/myjava.js')}}" type="text/javascript"></script>
        <script type="text/javascript">
            var urlPort = '192.168.1.33:12345';
        </script>
    </head>
    <style type="text/css">
        body{
            /*background-color: #ebeced;*/
        }
        .page{
            width: 100%;
            height: auto;
            margin: auto;
            padding: 0px;
        }
        .page-wrapper{
            width: 100%;
            height: auto;
            padding: 0px;
        }
        .other-links{
            float: right;
        }
        .other-links li{
            width: 140px;
            list-style: none;
            float: left;
            padding-top: 10px;
        }
        .other-links .login{
            text-align: center;
        }
        .other-links .login img{
            float: right;
            margin-top: -18px;
            margin-right: 10px;           
        }
        .other-links .car{
            float: left;
            text-align: center;
        }
        .other-links .car p{
            float: right;
            font-size: 40px;
            margin-top: -18px;
            margin-right: 19px;
            color: #96a1a3;
        }
        .top-bar-user {
          padding: 10px 0;
          line-height: 28px;
          height: 80px;
        }
        .logo {
          height: 70px;
          position: relative;
          line-height: 45px;
          padding-top: -10px;
          margin-top: -5px;

        }
        .logo img{
          width: 240px;
          height: 70px;
        }
        .header{
            width: 100%;
            height: auto;
        }
        .navigation{
            width: 100%;
            height: auto;
            background: #2b4c79;
        }
        .navigation .role-nav{
            width: 1000px;
            margin: auto;
            height: 100px;
        }
        .navbar{
            border-bottom: none;
            font-size: 1.2em;
            font-weight: normal;
            opacity: .95;
            background: none;
            background: #2b4c79;
            color: #fff;
        }
        .navbar-default .navbar-nav > li > a {
            margin: 0;
            border-radius: 3px;
            color: #fff;
            line-height: 24px;
        }
        .navbar-default .navbar-nav > li > a:hover{
          color: #fff;
        }
        .navbar-default .navbar-nav .dropdown-menu {
            background: #2b4c79;
            border: 0;
            padding: 0;
            margin-top: 0;
            border-top: 0;
            border-radius: 0;
            left: 0;
        }
        .navbar-default .navbar-nav .dropdown-menu:before{
            position: absolute;
            top:0;
        }
        .navbar-default .navbar-nav .dropdown-menu > li > a {
            padding: 8px 15px;
            color: #fff;
        }
        .navbar-default .navbar-nav .dropdown-menu > li:hover > a,
        .navbar-default .navbar-nav .dropdown-menu > li:focus > a,
        .navbar-default .navbar-nav .dropdown-menu > li.active > a {
            background-color: #23648c;
            color: #fff;
        }
        .navbar-default .navbar-nav .dropdown-menu > li:last-child > a {
            border-radius: 0 0 3px 3px;
        }
        .linght_menu{
            width: 1000px;
            margin:auto;
        }
        .search-prod{
            margin: auto;
            padding: 15px;
        }
        #form .form-group {
            width: 550px;
            margin:auto;
            padding: 0px;
            border-radius: 20px;
            float: right;
        }
        #form .form-group input{
            border-radius: 10px 0px 0px 10px;
        }
        .for-carrito .car-img span{
            margin: auto; 
            margin-top: 7px; 
            font-size: 40px; 
            text-align: left; color: #ff6000;
            color: #ff6000;
        }
        @media (max-width: 480px) {
            .search-prod {
                display: none;
            }
            .logo {
              height: 20px;
              line-height: 45px;
              padding-top: -10px;
              margin-top: -5px;
              float: left;
              margin-left: -25px;
            }
            .logo img{
              width: 150px;
              height: 65px;
            }
            .for-login {
                width: 30px;
                float: left;
            }
            .for-login span{
                display: none;
            }
            #img-log img{
                width: 25px;
                margin-top: 13px;
                margin-left: 10px;
            }
            .for-carrito{
                width:  40px;
                margin-right: 15px;
                float: right;
            }
            .for-carrito .car{
                display: none;
            }
            .for-carrito .car-img span{
                margin-left: 15px;
                font-size: 33px;
            }
            .nombre{
                display: none;
            }
            
        }
        .for-login li{
            list-style: none;
        }
        .logo-user li{
            list-style: none;
        }
        .logo-user{
            width: 80px;
            float: left;
            font-size: 30px;
        }
        .logo-user .dropdown{
            width: 750px;
            margin-top: 8px;
        }
    </style>
<body>
    <div class="page">
    	<header id="header" class="navbar-fixed-top">
            <div class="top-bar-user" style="background-color: #ececec; color:#000;">
                <div class="col-xs-12">
                    <div class="col-sm-2">
                         <div class="logo">
                            <img src="{{ url('/assets/img/logo1.png')}}" alt="logo"> 
                        </div>
                    </div>
                    <div class="col-sm-6 search-prod">
                        <div class="search">
                            <form role="form" id="form">
                                <div class="form-group input-group">
                                    <input type="text" class="form-control" placeholder="Buscar en Sistel-Network...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-4" style="">
                        <div class="col-sm-6 for-login">
                            <?php 
                                if (Session::get('user') != null) {
                                    $arrayName = array(Session::get('user'));
                                    foreach ($arrayName as $key => $value) {
                                        $nombre = $value[1]." ".$value[2];
                                        $email = $value[3];
                                    }
                                    echo '<div class="col-sm-6 nombre">';
                                    echo "<small>".$nombre."</small>";
                                    echo '</div>';
                                    echo ('
                                    <div class="logo-user">
                                        <li class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                                            </a>
                                            <ul class="dropdown-menu dropdown-user">
                                                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                                                </li>
                                                <li class="divider"></li>
                                                <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                                </li>
                                            </ul>
                                            <!-- /.dropdown-user -->
                                        </li>
                                        </div>
                                    ');
                                }else{

                            
                             ?>
                                 <a href="{{url('/login')}}">
                                    <div class="col-sm-6" id="log-text" style="text-align: right;">
                                    
                                        <span class="tin hidden-sm-down">
                                            Entrar o registrarse
                                        </span>
                                    </div>
                                <div class="col-sm-6" id="img-log" style="margin: auto;">
                                    <a href="{{url('/login')}}">    
                                        <img src="{{url('/assets/img/noavatar92.png')}}" width="47" class="">
                                    </a>
                                </div>
                                </a>
                            <?php } ?>
                        </div>
                        <div class="col-sm-6 for-carrito">
                            <div class="col-sm-6" style="text-align: right;">
                                <a href="{{url('/car')}}">
                                    <span class="tin hidden-sm-down car">
                                        Mi carrito
                                    </span>
                                </a>
                            </div>
                            <div class="col-sm-6" style="">
                                <a href="{{url('/car')}}" class="car-img">
                                    <span class="fa fa-shopping-cart "></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                            <span class="sr-only">Menu</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Servicios <span class="fa fa-angle-down "></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/cabl-estruct')}}"><span class="fa fa-angle-double-right "></span> Cableado estructurado</a></li>
                                    <li><a href="{{url('/redes-inalam')}}"><span class="fa fa-angle-double-right "></span> Redes inalambricas</a></li>
                                    <li><a href="{{url('/redes-inalam')}}"><span class="fa fa-angle-double-right "></span> Centro de Proceso de Datos</a></li>
                                    <li><a href="{{url('/redes-inalam')}}"><span class="fa fa-angle-double-right "></span> Consultoría Tecnológica</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="{{url('/catalog')}}" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Productos <span class="fa fa-angle-down "></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{url('/prod/router')}}"><span class="fa fa-angle-double-right "></span> Router</a></li>
                                    <li><a href="{{url('/prod/switch')}}"><span class="fa fa-angle-double-right "></span> Switchs</a></li>
                                    <li><a href="{{url('/prod/cabl')}}"><span class="fa fa-angle-double-right "></span> Cableado</a></li>
                                    <li><a href="{{url('/prod/ante')}}"><span class="fa fa-angle-double-right "></span> Antelas inalambricas</a></li>
                                    <li><a href="{{url('/prod/servi')}}"><span class="fa fa-angle-double-right "></span> Servidores web</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Soluciones <span class="fa fa-angle-down "></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><span class="fa fa-angle-double-right "></span> Asesoria informatica</a></li>
                                    <li><a href=""><span class="fa fa-angle-double-right "></span> Mantenimiento Basico</a></li>
                                    <li><a href=""><span class="fa fa-angle-double-right "></span> Mantenimiento Avanzaso</a></li>
                                    <li><a href=""><span class="fa fa-angle-double-right "></span> Alojamiento de un sitio web</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    Infraestructura y comunicacion <span class="fa fa-angle-down "></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href=""><span class="fa fa-angle-double-right "></span> Comunicaciones unificadas </a></li>
                                    <li><a href=""><span class="fa fa-angle-double-right "></span> Domótica e Inmótica</a></li>
                                    <li><a href=""><span class="fa fa-angle-double-right "></span> Servidores web</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-wrapper">
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
    </footer>
</body>
</html>