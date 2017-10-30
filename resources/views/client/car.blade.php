@extends('layouts.index_catalog')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{url('/assets/css/optimized.css')}}">
	<style type="text/css">
		.contenedor-principal{
			padding-top: 50px;
            padding-bottom: 200px;
		}
		.btn_primary{
			color: #fff;
			background-color: #ff6000;
			border-color: #ed6003;
		}
	</style>
	<div class="contenedor-principal clase-prueba" id="contenedor-principal">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-lg-8 list-cartarticles-content m-b-2">
					<div class="white-card-movil">
						<h1 class="h3 m-b-1">Articulos en <strong>tu cesta</strong></h1>
						<div class="tabla-carrito-condensada shopping-list">
							<div class="subtabla tabla-carrito-condensada__encabezado hidden-md-down">
								<div class="celda articulo-carrito-condensado__foto">
									ARTÍCULO
								</div>
								<div class="celda articulo-carrito-condensado__datos">
									<div class="subtabla">
										<div class="celda superpuesta-sm articulo-carrito-condensado__texto">
											
										</div>
										<div class="celda superpuesta-sm articulo-carrito-condensado__numeros">
											<div class="subtabla">
												<div class="celda articulo-carrito-condensado__precio hidden-md-down text-sm-center">
													PRECIO
												</div>
												<div class="celda articulo-carrito-condensado__cantidad text-lg-center">
													UNIDADES
												</div>
												<div class="celda articulo-carrito-condensado__coste text-xs-center">
													TOTAL
												</div>
												<div class="celda articulo-carrito-condensado__eliminar text-xs-right">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="shopping-item articulo-carrito-condensado atrapatodo deleted">
								<div class="subtabla">
								<?php 
									$total_articulo = 0;
									$total_venta = 0;
									if (Session::get('car')) {
										$array[] = Session::get('car');
										for ($i=0; $i < count($array); $i++) { 
											$total_articulo = $total_articulo +$i +1;
											$total_venta= $total_venta + $array[$i]['cant'] * $array[$i]['pre']
								?>
									
									<div class="celda articulo-carrito-condensado__foto">
										<a href="">
											<img class="foto img-fluid" src="{{url('/assets/img/img_products/'.$array[$i]['img'])}}">
										</a>
									</div>
									<div class="celda articulo-carrito-condensado__datos">
										<div class="subtabla">
											<div class="celda superpuesta-sm articulo-carrito-condensado__texto">
												<div class="h5" itemprop="mane">
													<a class="enlace-simulado" href="">
														{{$array[$i]['nom']}}
													</a>
												</div>
												<p class="articulo-carrito-condensado__disponibilidad m-b-0 texto-verde">
													¡En stock! Recibe menos de 10 dias
												</p>
											</div>
											<div class="celda superpuesta-sm articulo-carrito-condensado__numeros">
												<div class="subtabla">
													<div class="celda articulo-carrito-condensado__precio text-sm-center">
														<span>${{$array[$i]['pre']}}</span>
													</div>
													<div class="celda articulo-carrito-condensado__cantidad text-lg-center">
													<span>{{$array[$i]['cant']}}</span>
													</div>
													<div class="celda articulo-carrito-condensado__coste text-xs-center">
														<span>${{$array[$i]['cant'] * $array[$i]['pre']}}</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php
										}
										Session::put('art',$total_articulo);
										Session::put('total',$total_venta);
									}else{
										echo("<p>No hay productos al carrito</p>");
									}
								?>
							</div>
						</div>
						<div class="acciones-carrito-pago m-t-1">
							<div class="row">
								<div class="col-xs-6 col-md-2">
									<a id="GTM-carrito-vaciarcarrito" class="btn btn-link btn-block enlace-secundario form-control-margin " href="{{url('/car/destroycar')}}">Vaciar carrito</a>
								</div>
								<div class="col-xs-12 col-md-8 text-xs-center text-md-right">
									<a id="GTM-carrito-seguircomprando" class="btn btn-secondary form-control-margin" href="{{url('/catalog')}}">Suegir comprando</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-lg-4">
					<div class="info-pago m-b-1" style="margin: auto;">
						<div class="ticket-resumen-content">
							<div class="ticket-pago" id="ticket-pago">
								<div class="ticket-pago__desglose">
									<div class="ticket-pago__concepto concepto-articulos">
										Articulos<strong>()</strong>;
										<span class="pull-xs-right"><?php echo "".Session::get('art');?></span>
									</div>
									<div class="ticket-pago__concepto concepto-total">
										<strong>Total
										<span class="pull-xs-right"><?php echo "$".Session::get('total');?></span>
										</strong>
									</div>
								</div>
							</div>
							<div class="col-sm-6 total-compra"></div>
						</div>
						<div class="col-xs-12">
							<a href="{{url('/car/order')}}"><button type="button" class="btn btn-default btn_primary btn-lg btn-block">Realizar pedido</button></a>
						</div>
					</div>
				</div>
				@if(Session::get('msg-compra'))
					<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{Session::get('msg-compra')}}
                    </div>
				@endif
			</div>
		</div>
	</div>
@stop