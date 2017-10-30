@extends('layouts.principal')
@section('content')
    <style type="text/css">
        
        #alianzas{
            margin-top: 100px;
            padding-top: 100px;
            margin: 0px;
            padding: 0px;
            height: 300px;
            width: 100%;
        }
        .client{
            width: 100%;
            height: auto;
            margin: auto;
            background: #272727;
            color: #FFF;
            padding-bottom: 100px;
            padding: 0px;
            margin: 0px;
            height: 400px;
        }
        .client h2{
            color: #fff;
            font-size: 20px;
            padding-top: 100px;
            padding-bottom: 20px;
        }
        .client .list-client{
            width: 1000px;
            margin: auto;
            padding-left: 30px;
        }
        .list-client ul{
            margin: auto;
            text-align: center;
            position: relative;
        }
        .list-client ul li{
            list-style: none;
            float: left;
            margin: auto;
            text-align: center;
            padding-bottom: 30px;
            padding-right: 20px;
        }
        .list-client ul li img{
            width: 150px;
            margin: auto;
        }
        .contact{
            margin-top: 50px;
        }
        @media (max-width: 480px){
            .container{
                width: 100%;
                margin: 0px;
                padding: 0px;
                margin: auto;
                padding-right: 10px;
            }
            .container .cajas_productos{
                width: 100%;
                margin: 0px;
                padding: 0px;
                margin: auto;
                padding-right: 10px;
            }
            .cajas_productos .products {
                width: 100%;
                margin: auto;
            }
            .cajas_productos .products img{
                width: 260px;
                margin: auto;
                padding-right: 15px;
                height: 189px;
            }
            .info{
                width: 100%;
                margin-top: -100px;
            }
            .info h3{
                width: 100%;
                padding-right: 8px;
                padding-left: 8px;
                margin: auto;
                text-align: left;
            }
            .carousel-lifi{
                margin-bottom: 0px;
                margin: 0px;
                height: 250px;
            }
            #alianzas{
                padding-bottom: 100px;
            }
            .client{
                width: 100%;
                margin: auto;
                height: 900px;
            }
            .client .list-client{
                width: 100%;
                margin: auto;
                text-align: center;
                padding: 0px;
                margin: 0px;
            }
            .client h2{
                padding-top: 50px;
            }
            .list-client ul{ 
                margin: auto;
                width: 100%;
                padding: 0px;
                margin: 0px;
            }
            .list-client ul li{
                width: 100%;
                margin: auto;
            }
        }
        @media (max-width: 600px){
            .carousel-lifi{
                margin-bottom: 0px;
                margin: 0px;
                height: 370px;
            }
            .info{
                margin-top: -100px;
            }
        }
    </style>
    <section id="main-slider" class="no-margin">
        <div class="carousel slide" id="main-slider1" style="margin-top:100px">
            <ol class="carousel-indicators">
                <li data-target="#main-slider1" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider1" data-slide-to="1"></li>
                <li data-target="#main-slider1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(assets/img/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content" style="margin-top:-70px">
                                    <h1 class="animation animated-item-1">Soluciones Tecnológicas</h1>
                                    <h2 class="animation animated-item-2">
                                         A través de productos y servicios de consultoría, desarrollo e 
                                        integración de sistemas, mediante el uso de metodologías y tecnologías 
                                        de la información.</h2>
                                    <a class="btn-slide animation animated-item-3" href="#compania">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item" style="background-image: url(assets/img/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content" style="margin-top:-80px; margin-left:50px">
                                    <h1 class="animation animated-item-1" style="text-shadow: 2px 2px 10px black;">Consultoría en Informática  Desarrollo de Software  Soporte a aplicaciones</h1>
                                    <h2 class="animation animated-item-2" style="text-shadow: 1px 1px 10px black;">Plataformas Web |  Móvil | Cliente Servidor</h2>
                                     <a class="btn-slide animation animated-item-3" href="#servicios">Ver más</a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item " style="background-image: url(assets/img/bg6.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content" style="margin-top:-80px; margin-left:50px">
                                    <h1 class="animation animated-item-1" style="color: red; text-shadow: 1px 1px 10px black;">HELP !</h1>
                                    <h2 class="animation animated-item-2">Asesoramos a nuestros clientes en las tecnologías que deben de utilizar</h2>
                                    <h2 class="animation animated-item-2">Nuestras solucion de soporte especializada para ti</h2>
                                    <br><h2 class="animation animated-item-2"> <a href="">Chatea en linea</a></h2>
                                    <a class="btn-slide animation animated-item-3" href="#tecnologias">Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="prev hidden-xs" href="#main-slider1" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider1" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section>
    <section id="compania" >
        <div style="visibility: visible;  animation-name: fadeInDown;" class="container wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="100ms">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Compañia</h2>
                    <p class="lead"><strong>Sistel-Network S.A de C.V</strong> es una empresa orientada a ofrecer soluciones tecnológicas a través de productos y servicios de <strong>consultoría, desarrollo e integración de sistemas,</strong> mediante el uso de <strong>metodologías y tecnologías de la información.</strong><br><br>
                    Contamos con amplia experiencia para generar aplicaciones en diversas 
                    plataformas de desarrollo, proveemos servicios para desarrollar 
                    soluciones basadas en ambientes</p>
                    <img src="{{ url('/assets/img/img_compania.jpg') }}" class="img-thumbnail img-centered img-responsive">
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="timeline">
                        <li>
                            <div class="col-sm-5" style="padding-right:60px;">
                                <div class="timeline-heading" style="text-align:right;">
                                    <h2>MISION</h2>
                                </div>
                                <p class="text-muted" style="text-align:right;">Ofrecer productos y servicios de telecomunicaciones de la mejor calidad, adaptadas a las necesidades del mercado con un personal calificado y certificado en tecnología que permita satisfacer las necesidades de nuestros clientes y mantener una comunicación integrada.</p>
                            </div>
                            <div class="timeline-image" style="float:left; left:-60px;">
                                <img src="{{ url('/assets/img/mision.jpg') }}" class="img-thumbnail img-circle img-responsive">
                            </div>
                        </li>
                        <div style="clear:both"></div><br><br>
                        <li>
                            <div class="col-sm-5 vision" style="float:right; margin-right:0px;">
                                <div class="timeline-heading" style="text-align:left;">
                                    <h2>VISION</h2>
                                </div>
                                <p class="text-muted" style="text-align:left;">
                                    Llegar a ser una empresa   reconocida a nivel nacional como una empresa que ofrece soluciones innovadoras de vanguardia tecnológica en la Instalación de Redes y telecomunicaciones, brindando en mejor servicio con un personal altamente capacitado.</p>
                            </div>
                            <div class="timeline-image" style="float:right;">
                               <img src="{{ url('/assets/img/vision.jpg') }}" class="img-thumbnail img-circle img-responsive">
                            </div>
                            
                            <!-- <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h2>VISIÓN</h2>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Llegar a ser una empresa reconocida a nivel nacional como una empresa que ofrece soluciones innovadoras de vanguardia tecnológica en la Instalación de Redes y telecomunicaciones, brindando en mejor servicio con un personal altamente capacitado.
                                </div>
                            </div>-->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <section id="servicios" >
        <div class="container">
           <div style="visibility: visible; animation-name: fadeInDown;" class="center wow fadeInDown animated">
                <h2>Servicios</h2>
                <p class="lead">Sistel-Network ofrece un amplio catálogo de servicios dentro del sector de las telecomunicaciones y las infraestructuras tecnológicas:<br><br>
                <img src="{{ url('/assets/img/img_servicios.jpg') }}" class="img-thumbnail img-centered img-responsive" height="371" width="816">
            </div>
            <div class="row">
                <div class="features">
                    <div class="title"><h2>Infraestructuras y Comunicaciones</h2></div><br>
                    <div style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" class="col-md-6 col-sm-12 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="" style="background-image: url(assets/img/cableado-estructurado-6-150x150.jpg)"></i>
                            <h2 style="color:#23b222"><a href="{{url('/cabl-estruct')}}">Cableado estructurado</a></h2>
                            <h3>Trabajos profesionales de cableado estructurado de cobre y fibra óptica. Certificamos y auditamos sus infraestructuras según las normas internacionales. Contamos con las herramientas óptimas para garantizar la certificación.</h3>
                        </div>
                    </div>
                    <div style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" class="col-md-6 col-sm-12 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms"">
                        <div class="feature-wrap">
                            <i class="" style="background-image: url(assets/img/redes-inalambricas-101.jpg)"></i>
                            <h2 style="color:#23b222"><a href="{{url('/redes-inalam')}}">Redes inalambricas</a></h2>
                            <h3>Proporcionamos servicios y soluciones para solventar sus necesidades y límites de conectividad, extendiendo sus infraestructuras utilizando tecnologías inalámbricas (Wifi , Wimax y nuevo servicio de internet Li-Fi) adaptadas a sus entornos productivos.</h3>
                        </div>
                    </div>
                    <div style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" class="col-md-6 col-sm-12 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms"">
                        <div class="feature-wrap">
                            <i class="" style="background-image: url(assets/img/cpd-centro-de-proceso-de-datos-5-150x150.jpg); position: relative;"></i>
                            <h2 style="color:#23b222"><a href="#">Centro de Proceso de Datos</a></h2>
                            <h3>Ofrecemos nuestra amplia experiencia y soluciones para acometer cualquier proyecto de su Centro de Proceso de Datos (CPD), planificación, implantación, reforma, auditoría, mantenimiento, etc…</h3>
                        </div>
                    </div>
                    <div style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" class="col-md-6 col-sm-12 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms"">
                        <div class="feature-wrap">
                            <i class="" style="background-image: url(assets/img/Electronica-Red-1001.jpg)"></i>
                            <h2 style="color:#23b222"><a href="#">Electronica de red</a></h2>
                            <h3>Suministramos, instalamos y mantenemos hardware de red para cubrir todas las necesidades operativas de su organización. Nuestros socios tecnológicos, los más destacados del mercado, aportan garantía y calidad a nuestras instalaciones.</h3>
                        </div>
                    </div>
                    <div class="title"><h2>Consultoría Tecnológica</h2></div><br>
                    <div style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" class="col-md-6 col-sm-12 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms"">
                        <div class="feature-wrap">
                            <i class="" style="background-image: url(assets/img/Cosultoria-Informatica-1001.jpg)"></i>
                            <h2 style="color:#23b222"><a href="#">Asesoria informatica</a></h2>
                            <h3>Ponemos nuestra capacidad técnica, experiencia y conocimiento para llevar<br> a cabo sus proyectos dónde sean necesarias infraestructuras y sistemas de información y comunicación cubriendo las necesidades de asesoramiento informático para empresas y compromisos adquiridos.</h3>
                        </div>
                        <div class="feature-wrap">
                            <i class="" style="background-image: url(assets/img/Seguridad-informatica-10011.jpg); position: relative;"></i>
                            <h2 style="color:#23b222"><a href="#">Seguridad Informática</a></h2>
                            <h3>
                                Seguridad informática para empresas
                                Examinamos los diferentes elementos de sus sistemas de información y comunicaciones valorando los riesgos y vulnerabilidades. Elaboramos planes de seguridad informática para empresas y contingencia que garantizan la continuidad minimizando costes asociados a caídas/perdidas de servicio.
                            </h3>
                        </div>
                    </div>
                    <div style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" class="col-md-6 col-sm-12 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms"">
                        <div class="feature-wrap">
                            <i class="" style="background-image: url(assets/img/mantenimiento-informatico-4-150x150.jpg);position: relative;"></i>
                            <h2 style="color:#23b222"><a href="#">Mantenimiento Informático</a></h2>
                            <h3>
                                Ofrecemos soluciones de mantenimiento informático para empresas adaptadas a         su      organización o al objeto de la intervención correctiva o preventiva buscando siempre la continuidad de sus sistemas e infraestructuras TIC.
                            </h3>
                        </div>
                    </div>
                    <!-- <div style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" class="col-md-6 col-sm-12 wow fadeInDown animated" data-wow-duration="1000ms" data-wow-delay="600ms"">
                        <div class="feature-wrap">
                            <i class="fa fa-key" style="background-image: url(/assets/img/mantenimiento-informatico-4-150x150.jpg)"></i>
                            <h2 style="color:#23b222">Seguridad Informática</h2>
                            <h3>
                                Seguridad informática para empresas
                                Examinamos los diferentes elementos de sus sistemas de información y comunicaciones valorando los riesgos y vulnerabilidades. Elaboramos planes de seguridad informática para empresas y contingencia que garantizan la continuidad minimizando costes asociados a caídas/perdidas de servicio.
                            </h3>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <section id="productos" >
        <div style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInDown;" class="center wow fadeInDown animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s"">
            <h2><a href="{{url('/catalog')}}">Nuestro productos</a></h2>
            <div class="container">
                 <div class="cajas_productos">
                     <div class="products">
                         <img src="{{url('/assets/img/sevidorvirtual.png')}}">
                     </div>
                     <div class="products">
                         <img src="{{url('/assets/img/wizone.png')}}">
                     </div>
                     <div class="products">
                         <img src="{{url('/assets/img/security.png')}}">
                     </div>
                     <div class="products">
                         <img src="{{url('/assets/img/sgestionado.png')}}">
                     </div>
                     <div class="products">
                         <img src="{{url('/assets/img/internetflex.png')}}">
                     </div>
                     <div class="products">
                         <img src="{{url('/assets/img/internetdedicado.png')}}">
                     </div>
                 </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br>
    <section id="tecnologias" class="no-margin">
        <div style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInDown;" class="center wow fadeInDown animated" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s"">
            <h2>Tencologia Li-Fi</h2>
            <div class="new-tecnology">
                <div class="conatiner">
                    <div class="col-md-12 no-margin carousel-lifi">
                        <div id="carousel-1" class="carousel slide no-margin" data-ride="carousel">
                            <!--Indicadores-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-1" data-slide-to="1"></li>
                                <li data-target="#carousel-1" data-slide-to="2"></li>
                            </ol>
                            <!--Contenedor de los slide-->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{url('/assets/img/1.png')}}">
                                </div>
                                <div class="item">
                                     <img src="{{url('/assets/img/2.png')}}">
                                </div>
                                <div class="item ">
                                    <img src="{{url('/assets/img/3.png')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <p style="font-size:24px; color: #149ED0;">Seguridad en LiFi</p>
                        <h3>
                            Ledcom ofrece la transmisión de internet atreves de la luz visible, por eso que es más seguro que el WiFi y no interfiere con otro tipo de señales, además de que la luz no atraviesa las paredes esto vuelve a LiFi en una red segura en la cual se pude enviar y recibir información sin interferencia y con mucho más seguridad.
                        </h3>
                    </div>
                    <div class="ventajas" style="background: #D9E3F3;">
                        <p style="font-size:24px; color: #149ED0; padding-top:20px;">Ventajas de LiFi</p><br><br>
                        <div class="container">
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <img src="{{url('/assets/img/rapido.png')}}">
                                    <p style="font-size:24px; color: #149ED0; padding-top:20px;">Rápido</p>
                                    Por su velocidad de transferencia mantiene una bidireccionalidad de 30 Mbps
                                </div>
                                <div class="col-sm-4">
                                    <img src="{{url('/assets/img/costo.png')}}">
                                    <p style="font-size:24px; color: #149ED0; padding-top:20px;">Bajo Costo</p>
                                    Evitando el empleo de cableado costoso, (por trayectos y por calibre) esto reduce directamente en un ahorro sustancial en el cableado y en las instalaciones
                                </div>
                                <div class="col-sm-4">
                                    <img src="{{url('/assets/img/luz.png')}}">
                                    <p style="font-size:24px; color: #149ED0; padding-top:20px;">Luz LED</p>
                                    No emite rayos ultra violeta, lo que evita riesgos tanto en la salud humana como en la flora y fauna, además de que no funciona por radiofrecuencia, no emite radiación.
                                </div>
                            </div>
                            <div style="clear:both"></div>                            
                            <div class="col-sm-12" style="padding-top: 20px; margin-bottom: 30px;">
                                <div style="clear:both"></div>
                                <div class="col-sm-4">
                                    <img src="{{url('/assets/img/seguro.png')}}">
                                    <p style="font-size:24px; color: #149ED0; padding-top:20px;">Seguro</p>
                                    Por su velocidad de transferencia mantiene una bidireccionalidad de 30 Mbps
                                </div>
                                <div class="col-sm-4">
                                    <img src="{{url('/assets/img/ecologico.png')}}">
                                    <p style="font-size:24px; color: #149ED0; padding-top:20px;">Ecologica</p>
                                    Por su velocidad de transferencia mantiene una bidireccionalidad de 30 Mbps
                                </div>
                                <div class="col-sm-4">
                                    <img src="{{url('/assets/img/ecologico.png')}}">
                                    <p style="font-size:24px; color: #149ED0; padding-top:20px;">Aplicacion de la tecnologia LI-FI</p>
                                    Por su velocidad de transferencia mantiene una bidireccionalidad de 30 Mbps
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
    <section id="alianzas" >
        <div style="visibility: visible; animation-duration: 1000ms; animation-delay: 100ms; animation-name: fadeInDown;" class="center wow fadeInDown animated  no-margin" data-wow-offset="30" data-wow-duration="1.5s" data-wow-delay="0.15s"">
            <div class="col-lg-12 client">
                <h2>Nuestro clientes</h2>
                <div class="col-lg-12">
                    <div class="list-client">
                        <ul>
                            <li>
                                <img src="{{url('/assets/img/estelar.png')}}">
                            </li>
                            <li>
                                <img src="{{url('/assets/img/gecelca.png')}}">
                            </li>
                            <li>
                                <img src="{{url('/assets/img/comfamiliar.png')}}">
                            </li>
                            <li>
                                <img src="{{url('/assets/img/almirante.png')}}">
                            </li>
                            <li>
                                <img src="{{url('/assets/img/elpoblado.png')}}">
                            </li>
                            <li>
                                <img src="{{url('/assets/img/marina.png')}}">
                            </li>
                            <li>
                                <img src="{{url('/assets/img/cayena.png')}}">
                            </li>
                            <li>
                                <img src="{{url('/assets/img/ejimenez.png')}}">
                            </li>
                            <li>
                                <img src="{{url('/assets/img/bovedas.png')}}">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact" >
        <br><br>
        <!-- <div class="container"> -->
            <div class="container">
                <div class="contact">
                    <div class="col-sm-5">
                    </div>
                    <div class="col-sm-5 z  ">
                        
                    </div>
                </div>
            </div>
            <div class="center">
                <h2>Dejenos tu mensaje</h2>
            </div>
            <div class="form">
                <form class="form" action="php/email.php" method="post">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label class="">Nombre</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre del usuario" name="" required="requiered">
                        </div>
                        <div class="form-group">
                            <label class="">Correo electronico</label>
                            <input type="text" class="form-control" placeholder="Ingrese el correo electronico" name="" required="requiered">
                        </div>
                        <div class="form-group">
                            <label class="">Telefono</label>
                            <input type="text" class="form-control" placeholder="Ingrese el numero telefonico" name="" required="requiered">
                        </div>
                        <div class="form-group">
                            <label class="">Compañia</label>
                            <input type="text" class="form-control" placeholder="Ingrese la compania que pertenece" name="" required="requiered">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="">Asunto</label>
                            <input type="text" class="form-control" placeholder="Ingrese el asunto" name="" required="requiered">
                        </div>
                        <div class="form-group">
                            <label class="">Mensaje</label>
                            <textarea class="form-control" placeholder="Deje un mensaje" required="requiered" rows="8"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-success btn-enviar">Enviar mensaje</button>
                    <br><br>
                </form>
            </div>
        <!-- </div> -->
    </section>
@stop