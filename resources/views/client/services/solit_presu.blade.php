@extends('layouts.index_catalog')
@section('content')
    <style type="text/css">
        .presupueto{
            padding-top: 150px;
            padding-bottom: 30px;
        }
        .head-presu{
            border-bottom: 1px solid #E2E2E2;
            padding-bottom: 5px;
        }
        .products{
            border: 1px solid #E2E2E2;
            background-color: #fff;
            margin: auto;
            padding-top: 30PX;
        }
        .caj-product{
            padding-bottom: 20px;
            margin: auto;
            position: relative;
            height: 290PX;
        }
        .caj-product a{
            color: #0066c0;
        }
        .caj-product .tam-bok{
            width: 100%;
            height: 230px;
        }
        .caj-product .img-product{
            margin: auto;
            width: 180px;
            height: 180px;
            padding-bottom: 5px;
            padding-bottom: 10px;
        }
        .caj-product .img-product img{
            width: 100%;
            height: 100%;
        }
        .caj-product .img-product .info-product{
            width: 100%;
            height: 100px;
            text-align: center;
        }
        .caj-product a:hover{
             color: #d43133;
        }
        .info-product{
            text-align: center;
        }
        .caj-product .info-product-price{
            color: #d43133;
            text-align: center;
        }
        @media (max-width: 480px){
            filters-type-product{
                display: none;
            }
            .col-sm-10{
                width: 280px;
                margin: auto;
                margin-left: -10px;
                margin-right: 20px;
            }
            .col-sm-12{
                width: 100%;

            }
            .box-product{
                margin: 0px;
                padding: 0px;
                width: 100%;
                margin-top: 150px;
                margin-bottom: 10px;
            }
        }
        .filters-type-product{
            margin: 0px;
            padding: 0px;
        }
        .filters-type-product .mark{
            width: 100%;
            padding: 0px;
            margin: 0px;
        }
        .filters-type-product .mark .head{
            border: 1px solid #E2E2E2;
            background-color: #bababa;;;
            height: 35px;
            font-size: 14px;
            padding: 0px;
            margin: 0px;
            padding-left: 10px;
            padding-top: 5px;
        }
        .filters-type-product .mark .body{
            padding: 0px;
            margin: 0px;
            background-color: #fff;
            border: 1px solid #E2E2E2;
            padding-left: 10px;
        }
        .filters-type-product .conect{
            width: 100%;
            padding: 0px;
            margin: 0px;
        }
        .filters-type-product .conect .head{
            border: 1px solid #E2E2E2;
            background-color: #bababa;;;
            height: 35px;
            font-size: 14px;
            padding: 0px;
            margin: 0px;
            padding-left: 10px;
            padding-top: 5px;
        }
        .filters-type-product .conect .body{
            padding: 0px;
            margin: 0px;
            background-color: #fff;
            border: 1px solid #E2E2E2;
            padding-left: 10px;
        }
        .filters-type-product .capacidad{
            width: 100%;
            padding: 0px;
            margin: 0px;
        }
        .filters-type-product .capacidad .head{
            border: 1px solid #E2E2E2;
            background-color: #bababa;;;
            height: 35px;
            font-size: 14px;
            padding: 0px;
            margin: 0px;
            padding-left: 10px;
            padding-top: 5px;
        }
        .filters-type-product .capacidad .body{
            padding: 0px;
            margin: 0px;
            background-color: #fff;
            border: 1px solid #E2E2E2;
            padding-left: 10px;
        }
    </style>
    <div class="container presupueto">
        <div class="col-sm-12">
            <div class="col-sm-12 head-presu">
                <h2>Solicite presupuesto</h2>
            </div>
            <div class="col-sm-12">
                <p>Solicite presupuesto sin compromiso sobre cualquiera de nuestros productos y/o servicios. En breve nos pondremos en contacto con Vd., para ofrecerle la mejor oferta posiblie en base a sus necesidades.Si lo desea, también puede ponerse en contacto con nosotros a través de nuestra linea telefónica en el 925 24 50 50.</p>
                <strong><h3>Solicite presupuesto, dejenos sus datos:</h3></strong> 
            </div>
            <div class="col-sm-12">
                <form class="form" action="{{url('/serv/soli-presu')}}" method="POST" enctype="">
                {!! csrf_field() !!}
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nombre de usuario(requerido):</label>
                        <input type="text" name="nom" class="form-control" required="" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group">
                        <label>Nombre de la empresa:</label>
                        <input type="text" name="emp" class="form-control" required="" placeholder="Empresa u organizacion">
                    </div>
                    <div class="form-group">
                        <label>E-mail(requerido):</label>
                        <input type="text" name="email" class="form-control" required="" placeholder="Correo electronico">
                    </div>
                    <div class="form-group">
                        <label>Telefono:</label>
                        <input type="text" name="tel" class="form-control" required="" placeholder="Numero telefonico">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Asunto:</label>
                        <input type="text" name="asu" class="form-control" required="" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                        <label>Informacion u observaciones:</label>
                        <textarea class="form-control" name="ob" required="" rows="8" placeholder="observaciones"></textarea>
                    </div>
                </div>
                <div class="col-sm-12">
                    <a href=""><button class="btn btn-primary">Enviar solicitud</button></a>
                </div>
                </form>
                <div class="col-sm-12">
                    @if(Session::has('status'))
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{Session::get('status')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@stop