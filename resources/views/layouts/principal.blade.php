<!DOCTYPE html>  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistel-Network Telecomunicaciones</title>
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ url('/assets/css/main.css') }}">
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
    <body data-spy="scroll" data-target=".navbar-collapse">
        <header id="header" class="navbar-fixed-top">
            <div class="top-bar">
                <div class="container">
                    <div class="row">                                  
                        <div class="col-sm-12 col-xs-12" style="height:8px">
                            <div class="pull-right" style="margin: -10px 5px 5px 15px">
                                <a href="http://www.generalsoft.com.mx/index-usa.html" class="btn-link" style="color:white">
                                </a>
                            </div>
                            <div class="top-number text-right pull-right">
                                <h2 style="color: white; margin-top:-6px">
                                    <i class="fa fa-phone-square" style="color: #23b222"></i> 
                                    <strong>Llámanos (77) 13418776</strong>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div><!--/.container-->
            </div><!--/.top-bar-->
            <nav class="navbar navbar-inverse" role="banner" style="background-color: #ececec; color:#000; box-shadow:0 1px 5px black">
                <div class="container responsive-logo" >
                    <div class="navbar-header" style="margin-bottom:10px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" style=" background-color:#23648c">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <img src="{{ url('/assets/img/logo1.png')}}" alt="logo"> 
                        </div>
                    </div>
                    <div style="height: 0px;" class="navbar-collapse navbar-right collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#main-slider"">Inicio</a></li>
                            <li><a class="page-scroll" href="#compania">Compañía</a></li>
                            <li><a href="#servicios">Servicios</a></li>
                            <li><a href="#productos">Productos</a></li>
                            <li><a href="#tecnologias">Tecnología LiFi</a></li>
                            <li><a href="#alianzas">Alianzas</a></li> 
                            <li><a href="#contact">Contacto</a></li>                                            
                        </ul>
                    </div>
                </div><!--/.container-->
            </nav><!--/nav-->
        </header><!--/header-->
    @yield('content')
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
    <div class="position-bottom-right " style="display: block; border: 0px none; position: fixed; background: transparent none repeat scroll 0% 0%; z-index: 2147483647; margin: 0px ! important; padding: 0px; transform: translateZ(0px); right: 0px; bottom: 0px; width: 270px; height: 54px;" scrolling="no" allowtransparency="true" id="tidio-chat" frameborder="0">
        <div class="btn-group dropup">
            <a href="#" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="chatt"><span class="glyphicon glyphicon-comment"></span> Chat en linea! Inicia ahora</a>
            <ul class="dropdown-menu chat-panel panel panel-primary" style="width:265px; float:left; margin-right:50px;" id="block">
                <div class="panel-heading">
                    <i class="fa fa-comments fa-fw"></i>
                    Chat&nbsp;&nbsp;
                    <span id="userName" style="color:#424242;"></span>
                </div>
                <div class="panel-body" id="chatpanel">
                    <!-- <ul id="containerMessages"> -->
                        <div class="alert alert-success" style="float:left;">
                                <span>Para que usted pueda chatear con nosotro por favor debe de llenar los siguientes campos.</span>
                        </div>
                        <div class="form-group">
                            <label>Usuario:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre del usuario">
                        </div>
                        <div class="form-group">
                            <label>Correo electronico:</label>
                            <input type="text" name="email" class="form-control" placeholder="Correo electronico">
                        </div>
                    <!-- </ul> -->
                </div>
                <div class="panel-footer">
                    <form id="formChat" type="name">
                        <table>
                            <tr>
                                <div class="input-group">
                                    <td>
                                    <!-- <input id="btn-input" type="text" class="form-control input-sm" placeholder="¿Ingrese su nombre?" id="name" autofocus autocomplete="off" name="name"> -->
                                    </td>
                                    
                                    <span class="input-group-btn">
                                    <td>
                                        <input type="submit" value="Ingresar" id="submit" class="btn btn-warning btn-sm">
                                    </span>
                                    </td>
                                </div>
                            </tr>
                        </table>
                    </form>
                </div>
            </ul>
        </div>
    </div>
    <style type="text/css">
        #block:hover{
            display: block;
        }
    </style>
</body>
</html>