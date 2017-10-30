<!DOCTYPE html>
<html>
<head>
	<title>New user | Sistel-network</title>
	 <link href="{{ url('/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
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
	.form-group > label{
		font-size: 12px;
		color: #96a1a3;
	}
	.logo_system img{
		width: 300px;
		height: 150px;
	}
	.head{
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
		<div class="forms">
			<div class="col-sm-6 col-sm-offset-3 login_borber">
				<div class="col-sm-10 col-sm-offset-1">
					<div class="head">
						Nueo cliente
					</div>
	                <form class="form" action="{{url('/log/new_user')}}" method="post">
	                	{!! csrf_field() !!}
	                		<div class="form-group">
	                            <label class="">Nombre:</label>
	                            <input type="text" class="form-control" placeholder="Ingrese el nombre del usuario" name="nom" required="requiered" >
	                        </div>
	                        <div class="form-group">
	                            <label class="">Apelledio parterno:</label>
	                            <input type="text" class="form-control" placeholder="Ingrese el apellido paterno" name="ap" required="requiered" >
	                        </div>
	                        <div class="form-group">
	                            <label class="">Email:</label>
	                            <input type="text" class="form-control" placeholder="Ingrese el correo electronico" name="email" required="requiered">
	                        </div>
	                        <div class="form-group">
	                            <label class="">Contraseña:</label>
	                            <input type="password" class="form-control" placeholder="Ingrese la contraseña" name="password" required="requiered">
	                        </div>
	                        <button type="submit" class="btn btn-primary btn-lg btn-block">Registrate</button>
	                        <div class="other-links form-group" style="padding-top: 20px;">
	                        	<div class="col-sm-12">
	                        		<ul>
	                        			<li>
	                    					<a href="{{url('/login')}}">¿Ya tienes una cuenta registrada? Ingresa aquí</a>
	                        			</li>
	                        		</ul>
	                        	</div>
	                        </div>
	                </form>
                </div>
            </div>
        </div>
	</div>
</body>
</html>