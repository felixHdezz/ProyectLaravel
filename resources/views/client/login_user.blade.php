<!DOCTYPE html>
<html>
<head>
	<title>New user | Sistel-network</title>
	<link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ url('/assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
</head>
<style type="text/css">
	body{
		background: #D9E3F3;
	}
	.logo_system{
		padding-top: 25px;
		margin-top: 30px;
		margin: auto;
		width: 350px;
		padding-left: 30px;
		margin-bottom: 30px;
	}
	.logo_system img{
		width: 300px;
		height: 150px;
	}
	.head{
		padding-top: 10px;
		font-size: 26px;
		border-bottom: 1px solid #E2E2E2;
		margin-bottom: 20px;
	}
	.login_borber{
		border: 1px solid #E2E2E2;
		background-color: #fff;
		box-shadow: 1px 1px 5px black;
	}
	.other-links .form-group{
		margin-bottom: 13px;
	}
	.other-links{
		font-size: 14px;
		padding: 0;
	}
	.other-links ul{
		padding: 0;
		text-align: center;
	}
	.other-links ul li{
		display: inline-block;
		margin: 0 5px 5px;
	}
	.other-links ul li > a{
		color: #96a1a3;
	}
	.other-links ul li > a:hover{
		color: #039be5;
		text-decoration: none;
		-webkit-transition: all 0.2s ease 0s;
		-o-transition: all 0.2s ease 0s;
		transition: all 0.2s ease 0s;
	}
	@media (max-width: 480px){
		.logo_system{
			width: 100%;
			margin: auto;
			padding: 0px;
			margin: 0px;
			padding-bottom: 15px;
		}
		.logo_system img{
			width: 100%;
			margin-right: 20px;
		}
	}
</style>
<body>
	<div class="container">
		<div class="logo_system">
			<img src="{{ url('/assets/img/logo1.png')}}" alt="logo"> 
		</div>
		<div class="col-sm-6 col-sm-offset-3 login_borber">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="head">
						Iniciar sesion
					</div>
	                <form class="form" action="{{url('/log/auth')}}" method="POST">
	                	{!! csrf_field() !!}
	                        <div class="form-group">
	                            <label class="">Email:</label>
	                            <input type="text" class="form-control" placeholder="Ingrese el correo electronico" name="email" required="requiered" width="100">
	                        </div>
	                        <div class="form-group">
	                            <label class="">Contraseña:</label>
	                            <input type="password" class="form-control" placeholder="Ingrese la contraseña" name="pass" required="requiered">
	                        </div>
	                        @if(Session::has('menssaje'))
	                        <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{Session::get('menssaje')}}
                            </div>
                            @endif
	                        <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
	                        <div class="other-links form-group" style="padding-top: 20px;">
	                        	<div class="col-sm-12">
	                        		<ul>
	                        			<li>
	                    					<a href="">¿Ha olivado su contraseña?</a>
	                        			</li>
	                        			<li>
	                        				<a href="{{url('/new_user')}}">¿No tiene una cuenta?</a>
	                        			</li>
	                        		</ul>
	                        	</div>
	                        </div>
	                </form>
                </div>
            </div>
		
	</div>
</body>
</html>