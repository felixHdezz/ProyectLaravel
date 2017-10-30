@extends('layouts.index_catalog')
@section('content')
	<style type="text/css">
		.product-detalle{
			padding-top: 150px;
            padding-bottom: 30px;
		}
		.box-prod{
			border: 1px solid #E2E2E2;
            background-color: #fff;
            height: 480px;
		}
		.img-product{
			width: 420px;
			height: 400px;
			margin: auto;
		}
		.box-prod .img-product > img{
			width: 200px;
			height: 270px;
			margin: auto;
			margin-top: 80px;
		}
		.ficha{
			border: 1px solid #E2E2E2;
            background-color: #fff;
            padding-bottom: 20px;
		}
		.ficha-producto-head{
			padding: 0;
			margin-bottom: 3px;
			background: #ffffff;
		}
		.ficha-producto-head .articulo{
			box-sizing: inherit;
		}
		.ficha-producto-head .articulo h1{
			word-break: break-word;
			font-size: 1.429rem;
			font-size: 2.2rem;
		}
		h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
			font-family: 'Montserrat', sans-serif;
		}
		h1 {
			font-size: 2.571rem;
		}
		.h4 {
			font-size: 1.429rem;
		}
		.row{
			margin-left: -0.5rem;
			margin-right: -0.5rem;
		}
		.ficha-producto-head .precio{
			padding-left: -10px;
			line-height: 20px;
			font-size: 20px;
			color: #ff6000;
		}
		.ficha-producto-head .precio span{
			font-size: 14px;
			color: #ff6000;
		}
		.ficha-producto-head .precio-siva span{
			color: #bababa;
			box-sizing: inherit;
			font-weight: normal;
		}
		/**/
		.detalle-prod {
			border: 1px solid #E2E2E2;
            background-color: #fff;
			padding-top: 25px;
		}
		.ficha-producto-datos-compra .row{
			margin-bottom: 9px;
		}
		.opciones-compra{
			border: 1px solid #E2E2E2;
            background-color: #fff;
            padding-top: 15px;
            padding-bottom: 20px;
        }
		.btn_primary{
			color: #fff;
			background-color: #ff6000;
			border-color: #ed6003;
		}
		/**/
		.por_pago{
			border: 1px solid #E2E2E2;
            background-color: #fff;
			padding-top: 5px;
			padding-bottom: 10px;
		}
		.por_pago .by_con{
			float: right;
			font-size: 14px;
			color: #bababa;
		}
		/**/
		.info-product-garan{
			border: 1px solid #E2E2E2;
            background-color: #fff;
			padding-top: 15px;
			padding-bottom: 15px;
		}
		.text-xs-center {
		    text-align: center !important;
		}
		.col-xs-4 {
		    width: 33.33333%;
		}
		.info-product-garan .fich-prod-info-bloq-in{
			display: table-cell;
			width: 50%;
			vertical-align: middle;
			text-align: center;
		}
		.info-product-garan .fich-prod-info-bloq-in .sistel-icon{
			font-size: 3.25rem;
		}
		i .sistel-icon{
			font-family: PcCom;
			font-style: normal;
			line-height: 1;
			font-size: 2rem;
			padding: .25rem;
		}
		i {
			font-family: 'OpenSans-Italic';
		}
		.info-product-garan .fich-prod-info-bloq-in em{
			display: inline-block;
			text-align: left;
		}
		.drank{
			color: #444;
		}
		@media (max-width: 480px) {
			
		}
	</style>
	<!-- <script type="text/javascript" src="{{ url('/assets/js/add_carrito.js')}}"></script> -->
	<div class="container product-detalle">
		<div class="col-sm-12">
		@foreach($prod as $pro)
			<form class="form" action="{{url('/prod/add_car')}}" method="POST">
			{!! csrf_field() !!}
			<div class="col-sm-6 box-prod">
				<div class="container" style="width: 100%">
					<div class="img-product">
						<img src="{{url('/assets/img/img_products/'.$pro->img)}}" class="img-responsive">
					</div>
				</div>
			</div>
			<div class="col-sm-6 ficha">
				<div class="col-sm-12">
					<div class="ficha-producto-head">
						<div class="articulo" style="padding: 0px; margin: 0px;">
							<h1 class="h1">
								<strong>{{$pro->vch_nom_pro}}</strong>
							</h1>
						</div>
						<div class="row">
							<div class="col-xs-12" style="margin: 0px; padding: 0;">
								<span class="precio">
									<strong>${{$pro->dc_precXuni_venta}}
										<span>MXN</span>
									</strong>
								</span>
								<span class="precio-siva">
									<span>
										<small>Sin iva y sin descuento 0%</small>
									</span>
								</span>
							</div>
							<div class="valoration">
								<span class="fa fa-star" style="color: yellow;"></span>
								<span class="fa fa-star" style="color: yellow;"></span>
								<span class="fa fa-star" style="color: yellow;"></span>
								<span class="fa fa-star" style="color: yellow;"></span>
								<span class="fa fa-star" style="color: yellow;"></span> 
								<span class="precio-siva">
									<span>
										<small>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valoracion por los clientes</small>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 detalle-prod">
				<div class="ficha-producto-datos-compra">
					<div class="row">
						<div class="col-xs-12 col-sm-3">
							<b>Marca</b>
						</div>
						<div class="col-xs-12 col-sm-9">
							<span class="fich-prod-marca" style="color: #ff6000;">
								{{$pro->vch_marca}}
							</span>
							<span class="fich-prod-cod" style="color: #bababa;">
								<small>| Cod. Articulo: {{$pro->vch_codigo}}</small>
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3">
							<b>Categoria</b>
						</div>
						<div class="col-xs-12 col-sm-9">
							<span class="fich-prod-categ" style="color: #bababa;">
								{{$pro->vch_nom_cat}}
							</span>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3">
							<b>Catidad</b>
						</div>
						<div class="col-xs-12 col-sm-9">
							<select class="" id="option" name="cant_prod">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-3">
							<b>Disponibilidad</b>
						</div>
						<div class="col-xs-12 col-sm-9" style="color: green;"">
							<span>!Producto actualmente en estock!</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 opciones-compra">
				@if(Session::has('msg'))
	                <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('msg')}}
                    </div>
                @endif
				<div class="col-lg-6">
					<input type="text" name="cod" id="cod" class="hidden" value="{{$pro->vch_codigo}}">
					<input type="text" name="nom" id="nom" class="hidden" value="{{$pro->vch_nom_pro}}">
					<input type="text" name="pre" id="pre" class="hidden" value="{{$pro->dc_precXuni_venta}}">
					<input type="text" name="img" id="img" class="hidden" value="{{$pro->img}}">
					<input type="text" name="exis" id="exis" class="hidden" value="{{$pro->int_uni_exis}}">
                    <button type="submit" id="add_car" class="btn btn-default btn-lg btn-block">Añadir al carrito</button>
                </div>
                <div class="col-lg-6">
                    <a href="{{url('/car/order')}}"><button type="button" class="btn btn-default btn_primary btn-lg btn-block">Comprar</button></a>
                </div>
			</div>
			</form>
			@endforeach
			<div class="col-xs-6 por_pago">
				<div class="col-xs-12">
					<span class="fa fa-twitter">&nbsp;</span>
					<span class="fa fa-facebook"></span>
					<span class="by_con">
						<span>
							<small>Pagar con&nbsp;</small><img src="{{url('/assets/img/paypal.png')}}">
						</span>
					</span>
				</div>
			</div>
			<div class="col-xs-6 info-product-garan">
				<div class="row">
					<div class="col-xs-4 text-xs-center">
						<span class="fich-prod-info-bloq-in">
							<i class="sistel-icon"><</i>
							<em class="drank">
								<strong data-togle="tooltip">3 años</strong>
								<br>
								de garantia
							</em>
						</span>
					</div>
					<div class="col-xs-4 text-xs-center">
						<span class="fich-prod-info-bloq-in">
							<i class="sistel-icon">?</i>
							<em class="drank">
								<strong data-togle="tooltip">30 dias</strong>
								<br>
								de devolucion
							</em>
						</span>
					</div>
					<div class="col-xs-4 text-xs-center">
						<span class="fich-prod-info-bloq-in">
							<i class="sistel-icon">=</i>
							<em class="drank">
								<strong data-togle="tooltip">100%</strong>
								<br>
								pago seguro
							</em>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop