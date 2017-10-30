<!DOCTYPE html>
<html>
<head>
	<title>Detalle pedido | Sistel-network</title>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistel-Network catalog</title>
        <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- <link rel="stylesheet" href="{{ url('/assets/css/main.css') }}"> -->
        <link rel="stylesheet" href="{{ url('/assets/css/responsive.css') }}">
        <link rel="stylesheet" href="{{url('/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{url('/assets/css/sb-admin-2.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/assets/css/timeline.css')}}">
        <link href="{{ url('/assets/admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{url('/assets/css/optimized1.css')}}">

        <script src="{{ url('/assets/js/jquery.js') }}"></script>
        <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{url('/assets/js/index.js')}}"></script>
        <script src="{{ url('/assets/js/jquery.flexisel.js') }}"></script>
        <script src="{{ url('/assets/js/fancywebsocket.js')}}"></script>
        <script src="{{ url('/assets/js/myjava.js')}}" type="text/javascript"></script>
</head>
<style type="text/css">
		body{
			background-color: #ebeced;
		}
		.container{
			padding-bottom: 10px;
		}
		.head-pedido{
			width: 100%;
			padding: 0px;
			margin: 0px;
			padding-bottom: 8px;
		}
		.head-pedido .logo{
			margin: 0px;
			padding: 0px;
		}
		.logo img{
			width: 100%;
		}
		.btn_primary{
			color: #fff;
			background-color: #ff6000;
			border-color: #ed6003;
		}
		.head h1{
			color: black;
			font-size: 20px;
			border-bottom: 1px solid #E2E2E2;
		}
		.fich-prod-info-bloq-in{
			display: table-cell;
			width: 50%;
			vertical-align: middle;
			text-align: center;
		}
		.fich-prod-info-bloq-in .sistel-icon{
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
		.fich-prod-info-bloq-in em{
			display: inline-block;
			text-align: left;
		}
		.col-sm-3{
			padding-top: 20px;
			padding-left: 50px;
			color: #888;
		}
		.pedido-direc-en{
			background: #ffffff;
		}
		form{
			padding-bottom: 10px;
		}
		.envi{
			padding: 0px;
			margin: 0px;
			height: auto;
		}
		.head-envio{
			background-color: #ffffff;
			padding-bottom: 2px;
			border-bottom: 2px solid #E2E2E2;
		}
		.head-money{
			background-color: #ffffff;
			padding-bottom: 2px;
			border-top: 2px solid #E2E2E2;
			border-bottom: 2px solid #E2E2E2;
		}
		.method-pago{
			background: #ffffff;
			padding-top: 10px;
			padding-bottom: 10px;
		}
		.list-met-pago {
			padding-top: 15px;
			width: 300px;
		}
		.list-met-pago ul li{
			list-style: none;
			float: left;
			padding-left: 15px;
		}
	</style>
<body>
	<div class="container">
		<div class="col-lg-12 head-pedido">
			<div class="col-sm-2 logo">
				<img src="{{ url('/assets/img/logo1.png')}}">
			</div>
			<div class="col-sm-3">
				<span class="fich-prod-info-bloq-in">
							<i class="sistel-icon">g</i>
							<em class="drank">
								<strong data-togle="tooltip">Envios</strong>
								<br>
								Sigue tus pedidos
							</em>
				</span>
			</div>
			<div class="col-sm-3">
				<span class="fich-prod-info-bloq-in">
							<i class="sistel-icon">?</i>
							<em class="drank">
								<strong data-togle="tooltip">30 dias</strong>
								<br>
								de devolucion
							</em>
						</span>
			</div>
			<div class="col-sm-3">
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
		<div class="col-lg-12">
			<div class="container">
				<div class="row ">
					<div class="col-lg-8 envi">
						<div class="col-lg-12 head-envio">
							<h2><span class="fa fa-truck"></span> <strong>Nueva direccion de envio</strong></h2>
						</div><br>
						<div class="col-lg-12 pedido-direc-en" >
							<h3>Direccion de envio</h3>
							<form class="form" action="{{url('/car/order-final')}}" method="post">
								{!! csrf_field() !!}
								<div class="col-sm-6">
									<div class="form-group">
										<label>Nombre / Quien recibe:</label>
										<input type="text" class="form-control" name="nom" required="" placeholder="Nombre de la persona ">
									</div>
									<div class="form-group">
										<label>Direcccion(calle,numero de casa o interior):</label>
										<input type="text" class="form-control" name="dir" required="" placeholder="Domicilio">
									</div>
									<div class="form-group">
										<label>Codigo postal:</label>
										<input type="text" class="form-control" name="cp" required="" placeholder="Codigo postal">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Estado de la republica:</label>
										<input type="text" class="form-control" name="est" required="" placeholder="estado">
									</div>
									<div class="form-group">
										<label>Ciudad:</label>
										<input type="text" class="form-control" name="ciu" required="" placeholder="Ciudad">
									</div>
									<div class="form-group">
										<label>Colonia:</label>
										<input type="text" class="form-control" name="col" required="" placeholder="Colonia">
									</div>
								</div>
						</div>
						<div class="col-lg-12 head-money">
							<h2><span class="fa fa-money "></span> <strong>Metodo de pago</strong></h2>
						</div>
						<div class="col-lg-12 method-pago">
							<div class="col-lg-12">
								<input type="Checkbox" name=""> PayPal (Más información)<br>
								<input type="Checkbox" name=""> Transferencia ordinaria (Más información)
								<div class="list-met-pago">
									<ul>
										<li>
											<img src="{{url('/assets/img/pay_paypal.png')}}">
										</li>
										<li>
											<img src="{{url('/assets/img/pay_visa.png')}}">
										</li>
										<li>
											<img src="{{url('/assets/img/pay_maestro.png')}}">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-4 col-lg-4">
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
								    <input type="Checkbox" name=""> <small>Entiendo y acepto las condiciones de envío y facturación.</small> 
								</div>
								<div class="col-sm-6 total-compra"></div>

							</div>

							<div class="col-xs-12">
								<a href=""><button type="submit" class="btn btn-default btn_primary btn-lg btn-block">Finalizar pedido</button></a>
							</div>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
	

	