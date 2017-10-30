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
			padding-top: 5px;
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
				<span><h1>Descubre las bondades de la tecnología Li-fi </h1></span>
			</div>
			<div class="col-xs-12 img">
				<img src="{{url('/assets/img/Li-fi.jpg')}}" class="img-responsive ">
			</div>
			<div class="col-xs-12 info-services">
				<p class="title">¿Que es el Li-fi?</p><br><br>
				<p style="font-size: 16px;">
					El sistema Li-fi, el cual fue inventado por el investigador Harold Haas de la universidad de Edimburgo en 2011, ha sido implementado en muy pocos países, pero en todos en los que ya opera el sistema, ha sido alabado como un éxito rotundo.

					El Li-fi utiliza comunicación de luz visual, el cual permite mandar información a una velocidad extremadamente rápida.

					En términos simples, el sistema permite que las ampolletas comunes de luz funcionen como una señal disparadora, comunicando códigos binarios 0 y 1 hacia otros dispositivos y aparatos electrónicos.

					Nuestras servicios extienden su conectividad sin limites con:
				</p>
			</div>
			<div class="col-lg-12 soluciones-productos">
				<div class="head">
					<span><h2>Beneficios</h2></span>
				</div>
				<div class="col-lg-12">
					<ul>
						<li>No sólo es barato y eficiente, el sistema Li-fi posee una serie de beneficios que lo vuelve en algo casi increíble para muchas personas.</li>
						<li>
							Más allá de su velocidad, el Li-fi ha sido destacado por ser un sistema que puede aprovechar el número de paredes en una habitación para reforzar el nivel de transmisión que reciben los usuarios en el mismo.
						</li>
							Esto se debe a que la señal no puede ser transmitida a través de una pared, en este sentido, la red Li-fi permite un nivel de seguridad de red mucho más alta que la que otorgan las redes Wi-fi.
						</li>
						<li>
							Más aún, el sistema ha sido alabado por proveer un reducido gasto en energía eléctrica, con respecto a los gastos acumulados por el Wi-fi.
						</li>
						<li>
							Cada vez son más las empresas que han comenzado a operar con Li-fi tan sólo por esta faceta.
						</li>
						<li>
							Haz click acá y conoce las ventajas de esta nueva tecnología.
						</li>
						<li>
							En términos medioambientales, el sistema también ha sido destacado por no depender de bombillas de luz que generen mucho residuo.
						</li>
						<li>
							La vida útil de cada bombilla led es de aproximadamente 40 años, y siendo derivada en un sistema de recolección de residuos correspondiente, el sistema termina siendo prácticamente verde bajo los estándares de las principales ONG’s que luchan por la protección del medio ambiente.
						</li>

				</div>
			</div>
			<div class="row btns" style="padding-bottom: 15px;">
				<div class="col-lg-12">
					<a href="{{url('/serv/presup')}}">
					<button class="btn btn-default btn-lg btn_primary solicit-presut"><span class="fa fa-list-alt"></span> Solicitar presupuesto gratis</button></a>
				</div>
			</div>
		</div>
	</div>
@stop