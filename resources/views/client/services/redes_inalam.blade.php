@extends('layouts.index_catalog')
@section('content')
	<style type="text/css">
		.services-cabl-estruct{
			margin-top: 150px;
			margin-bottom: 10px;
		}
		.head h1{
			color: black;
		}
		.head{
			border-bottom: 1px solid #E2E2E2;
		}
		.img{
			padding-top:5px;
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
			.soluciones-productos .box-serv{
				margin-bottom: 10px;
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
			padding-top: 10px;
		}
		.ser-img img{ 
			width: 160px;
			height: 160px;
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
				<span><h1>Redes inalambricas</h1></span>
			</div>
			<div class="col-xs-12 img">
				<img src="{{url('/assets/img/828567_97051173.jpg')}}" class="img-responsive ">
			</div>
			<div class="col-xs-12 info-services">
				<p class="title">Redes Inalámbricas, extienda su conectividad sin límites.</p><br><br>
				<p style="font-size: 16px;">Desde el departamento de Proyectos e ingenieria de Unitel proporcionamos servicios y soluciones para solventar sus necesidades y límites de conectividad, extendiendo sus infraestructuras utilizando tecnologías inalámbricas adaptadas a sus entornos productivos. Realizamos y ejecutamos estudios de necesidades, cobertura y del sitio, analizando interferencias y anidaciones de infraestructuras y dispositivos existentes que puedan incidir sobre su servicio e instalaciones de redes inalámbricas.

Nuestras servicios extienden su conectividad sin limites con:</p>
			</div>
			<div class="col-lg-12 soluciones-productos">
				<div class="head">
					<span><h2>Soluciones y productos</h2></span>
				</div>
				<div class="col-lg-12">
					<div class="col-sm-4 box-serv" style="margin-bottom: 10px;">
						<p><h3><a href="{{url('/cabl-estruct/wifi')}}">Redes WiFi</a></h3></p><br>
						<div class="col-xs-12 ser-img">
							<img src="{{url('/assets/img/Redes-Wifi-1001.jpg')}}" width="160" class="img-thumbnail"><br>
							<p class="description">Extendemos sus redes de trabajo LAN realizando estudios y registros de cobertura, auditorias de seguridad, certificaciones de emisiones electromagnéticas y radioeléctricas,….
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<p><h3><a href="{{url('/cabl-estruct/MinMax')}}">Redes MinMax</a></h3></p><br>
						<div class="col-xs-12 ser-img">
							<img src="{{url('/assets/img/Redes-Wimax-10011.jpg')}}" width="160" class="img-thumbnail"><br>
							<p class="description">Solventamos sus límites de conectividad y cobertura planificando y ejecutando soluciones WIMAX, somos Operadores Autorizados por la Comisión Nacional del Mercado de las Telecomunicaciones.</p>
						</div>
					</div>
					<div class="col-sm-4">
						<p><h3><a href="{{url('/redes-inalam/lifi')}}">Redes Lifi</a></h3></p><br>
						<div class="col-xs-12 ser-img">
							<img src="{{url('/assets/img/lifi.jpg')}}" width="160" class="img-thumbnail"><br>
							<p class="description">Ahora la empresa Sistel-Network ofrece nuevo servicio de redes inalambricas la tecnologia Li-Fi que cambiara el mundo.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row btns" style="padding-bottom: 15px;">
				<div class="col-lg-12">
					<button class="btn btn-default btn-lg btn_primary solicit-presut"><span class="fa fa-list-alt"></span> Solicitar presupuesto gratis</button>
					<button class="btn btn-primary btn-lg Contratar-servi-how"><span class="fa fa-check "></span>Contratar servicio ahora</button>
				</div>
			</div> -->
		</div>
	</div>
@stop