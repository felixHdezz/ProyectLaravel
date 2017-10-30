@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Usuario</h2>
        </div>
        <!-- /.col-lg-12 -->
	</div>
     <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actualizar usuario
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
							@foreach($user as $user)
							<form class="form" action="{{url('/admin/users/update')}}" method="post">
								{{ method_field('PUT') }}
								{{ csrf_field() }}
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Clave:</label>
										<input type="text" name="id" class="form-control" placeholder="Clave usuario" value="{{$user->Clave}}">
									</div>
									<div class="form-group">
										<label class="control-label">Nombre:</label>
										<input type="text" name="nom" class="form-control" placeholder="Nombre del usuario" value="{{$user->Nombre}}">
									</div>
									<div class="form-group">
										<label class="control-label">Apellido paterno:</label>
										<input type="text" name="ap" class="form-control" placeholder="Apellido parteno" value="{{$user->ap}}">
									</div>
									<div class="form-group">
										<label class="control-label">Apellido materno:</label>
										<input type="text" name="am" class="form-control" placeholder="Apellido materno" value="{{$user->am}}">
									</div>
									<div class="form-group">
										<label class="control-label">Telefono:</label>
										<input type="text" name="tel" class="form-control" placeholder="Telefono" value="{{$user->Telefono}}">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Correo electronico:</label>
										<input type="text" name="email" class="form-control" placeholder="Correo eletronico" value="{{$user->Email}}">
									</div>
									<div class="form-group">
										<label class="control-label">Direccion:</label>
										<input type="text" name="direc" class="form-control" placeholder="Domicilio" value="{{$user->Direccion}}">
									</div>
									<div class="form-group">
										<label class="control-label">Estado:</label>
										<input type="text" name="esta" class="form-control" placeholder="Estado" value="{{$user->Estado}}">
									</div>
									<div class="form-group">
										<label class="control-label">Ciudad:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Ciudad o municipio" value="{{$user->Ciudad}}">
									</div>
									<div class="form-group">
										<label class="control-label">Estado:</label>
										<select class="form-control" id="option" name="est">
											<option value="act">Activo</option>
											<option value="inac">Cerrado</option>
										</select>
									</div>
								</div>
								&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" id="btn_add"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Editar</button>
								<button class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancelar</button>
							</form>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@stop