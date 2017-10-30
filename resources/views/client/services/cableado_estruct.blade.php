@extends('layouts.index_catalog')
@section('content')
	<style type="text/css">
		.services-cabl-estruct{
			margin-top: 150px;
			margin-bottom: 10px;
		}
		.head h1{
			color: black;
			text-align: left;
		}
		.head{
			border-bottom: 1px solid #E2E2E2;
		}
		.img{
			margin: auto;
			position: relative;
		}
		.img img{
			width: 70%;
			margin: auto;
		}
		.info-services{
			padding-top: 20px;
		}
		.info-services .title{
			font-size: 22px;
		}
		@media (max-width: 480px){
			.col-xs-12{
				padding: 0px;
				margin: 0px;
			}
			.col-xs-12 .head{
				text-align: center
			}
			.img{
				margin: 0px;
				padding: 0px;
				width: 100%;
			}
			.img img{
				height: 100px;
				width: 100%;
			}
			.btns{
				width: 100%;
				margin: auto;
			}
			.solicit-presut{
				width: 220px;
				margin:auto;
				padding-bottom: 5px;
				margin-bottom: 10px;
				font-size: 14px;
			}
			.Contratar-servi-how{
				width: 220px;
				margin:auto;
				padding-bottom: 5px;
				font-size: 14px;
			}
		}
		.soluciones-productos{
			padding-bottom: 25px;
			margin: auto;
		}
		.soluciones-productos .col-lg-12{
			text-align: center;
			margin: auto;
		}
		.soluciones-productos .col-lg-12 .description{
			text-align: left;
		}
		.btn_primary{
			color: #fff;
			background-color: #ff6000;
			border-color: #ed6003;
		}
	</style>
	<div class="container services-cabl-estruct">
		<div class="col-xs-12">
			<div class="head">
				<span><h1>Cableado estructurado</h1></span>
			</div>
			<div class="col-xs-12 img">
				<img src="{{url('/assets/img/cableado-estructurado-7.jpg')}}" class="img-responsive">
			</div>
			<div class="col-xs-12 info-services">
				<p class="title">Cableado Estructurado, Sistemas (SCE). Soluciones de implantación, auditorías, mantenimiento, certificación, fibra óptica, redes inalámbricas, etc…</p><br><br>
				<p style="font-size: 16px;">Sistel-Network, empresa especializada en Cableado Estructurado, ofrecemos soluciones y productos para el cableado de su oficina u edificio, con el fin de ofrecerle una conectividad de todos tus equipos activos, de diferentes o igual tecnología, permitiendo la integración con los diferentes servicios que disponga: telefonía, datos, seguridad, domótica, etc …, es decir, todo lo referente al <a href="">cableado voz-datos</a> para redes de comunicaciones. Gracias a nuestras soluciones de conectividad, le proporcionamos infraestructuras inalámbricas, fibra óptica y cobre que habilitan una gran cantidad de servicios de comunicaciones.</p>
			</div>
			<div class="col-lg-12 soluciones-productos">
				<div class="head">
					<span><h2>Soluciones y productos</h2></span>
				</div>
				<div class="col-lg-12">
					<div class="col-sm-4">
						<p><h3><a href="">IMPLANTACIÓN DE SCE</a></h3></p><br>
							<div class="col-xs-12">
							<img src="{{url('/assets/img/cableado-estructurado-6-150x150.jpg')}}" class="img-thumbnail">
							<p  class="description">Cableado Estructurado, auditorías e implantación de soluciones de conectividad para redes de comunicaciones. Gracias a nuestras soluciones de conectividad proporcionamos las infraestructuras de cobre y …</p>
						</div>
					</div>
					<div class="col-sm-4">
						<p><h3><a href="">COMPONENTES</a></h3></p><br>
						<div class="col-xs-12">
							<img src="{{url('/assets/img/cableado-estructurado-5-150x150.jpg')}}" class="img-thumbnail">
							<p class="description">Nuestros Sistemas de Cableado Estructurado (SCE)  lo definimos como un conjunto de elementos, incluyendo paneles de terminación, módulos, conectores, cable y latiguillos, instalados …</p>
						</div>
					</div>
					<div class="col-sm-4">
						<p><h3><a href="">CABLE CAT. 7</a></h3></p><br>
						<div class="col-xs-12">
							<img src="{{url('/assets/img/cableado-estructurado-2-150x150.jpg')}}" class="img-thumbnail">
							<p class="description">Con la implantación de este tipo de cableado estructurado, el Cable de Categoría 7 o Cable Cat 7, podemos alcanzar los 10-gigabit Ethernet (XGbE o 10GbE), que actualmente es el más rápido de los estándares Ethernet, …</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row btns" style="padding-bottom: 15px;">
				<div class="col-lg-12 col-xs-4">
					<a href="{{url('/serv/presup')}}">
					<button class="btn btn-default btn-lg btn_primary solicit-presut"><span class="fa fa-list-alt"></span> Solicitar presupuesto gratis</button></a>
					<!-- <button class="btn btn-primary btn-lg Contratar-servi-how"><span class="fa fa-check "></span>Contratar servicio ahora</button> -->
				</div>
			</div>
		</div>
	</div>
@stop