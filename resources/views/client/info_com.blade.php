@extends('layouts.index_catalog')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{url('/assets/css/optimized.css')}}">
	<style type="text/css">
		.contenedor-principal{
			padding-top: 50px;
            padding-bottom: 220px;
		}
		.btn_primary{
			color: #fff;
			background-color: #ff6000;
			border-color: #ed6003;
		}
		.col-sm-12{
			margin: auto;
		}
		.info-com{
			padding-top: 50px;
			margin: auto;
			width: 500px;
		}
		.info-com h1{
			margin: auto;
			text-align: center;
			font-size: 70px;
			color: #ff6000;
			border-color: #ed6003;
		}
		.congra{
			text-align: center;
			font-size: 24px;
		}
		.info{
			font-size: 20px;
			text-align: center;
		}
	</style>
	<div class="contenedor-principal clase-prueba" id="contenedor-principal">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="info-com">
						<h1><span class="fa fa-check-circle "></span></h1>
						<p class="congra">Felicidades su pedido a sido finalizada<P>
						<span class="info"> ¡Gracias por comprar con nosotro en nuestra  tienda online y que siga disfrutando de nuestro productos y servicios!</span>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop