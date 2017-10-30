@extends('layouts.index_catalog')
@section('content')
    <style type="text/css">
        .box-product{
            padding-top: 150px;
            padding-bottom: 30px;
        }
        .head-title-prod{
            border: 1px solid #E2E2E2;
            background-color: #fff;
            font-size: 20px;
            height: 40px;
            padding-top: 8px;
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
    <div class="container box-product">
        <div class="col-sm-12">
            <div class="col-sm-2 filters-type-product">
                <div class="col-sm-12 mark">
                    <div class="head">
                       MARCAS
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    Asus
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    D-Link
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    Edimax
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    Cisco
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    Linksys
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 conect">
                    <div class="head">
                        CONECTIVIDAD
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    Cable
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    WiFi
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    WiFi 11ac
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 capacidad">
                    <div class="head">
                        CAPACIDAD
                    </div>
                    <div class="body">
                         <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    4 puertos
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    6 puertos
                                </label>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    8 puertos
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    10 puertos
                                </label>
                            </div>
                        </div>
                         <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="">
                                    Mas...
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 list-product">
                <div class="col-sm-12 head-title-prod">
                    <span class="title-">Productos</span>
                </div>
                <div class="col-sm-12 products">
                        @foreach($prods as $prod)
                            <div class="col-sm-4 caj-product">
                                <div class="tam-bok">
                                    <a href="{{url('/prod_deta/'.$prod->vch_codigo)}}" class="links">
                                        <div class="img-product">
                                            <img src="{{url('/assets/img/img_products/'.$prod->img)}}">
                                        </div>
                                        <div class="info-product">
                                            <p>{{$prod->vch_nom_pro}}</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="info-product-price">
                                    <span>${{$prod->dc_precXuni_venta}} MNX</span>
                                </div>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>
@stop