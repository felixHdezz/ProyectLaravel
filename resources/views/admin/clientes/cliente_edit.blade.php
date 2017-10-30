@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Cliente</h2>
        </div>
        <!-- /.col-lg-12 -->
	</div>
     <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actualizar cliente
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                       	@foreach($cli as $cli)
							<form class="form" action="{{url('/admin/client/update')}}" method="post">
								{{ method_field('PUT') }}
								{!! csrf_field() !!}
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Clave:</label>
										<input type="text" name="id" class="form-control" placeholder="Clave" value="{{$cli->Clave}}">
									</div>
									<div class="form-group">
										<label class="control-label">Compañia:</label>
										<input type="text" name="com" class="form-control" placeholder="Nombre de la compañia" value="{{$cli->Compania}}">
									</div>
									<div class="form-group">
										<label class="control-label">Direccion:</label>
										<input type="text" name="dir" class="form-control" placeholder="Direccion" value="{{$cli->Direccion}}">
									</div>
									<div class="form-group">
										<label class="control-label">Contacto:</label>
										<input type="text" name="cont" class="form-control" placeholder="Nombre contacto" value="{{$cli->Contacto}}">
									</div>
									<div class="form-group">
										<label class="control-label">Cargo:</label>
										<input type="text" name="carg" class="form-control" placeholder="Cargo" value="{{$cli->Cargo}}">
									</div>
									<div class="form-group">
										<label class="control-label">Codigo postal:</label>
										<input type="text" name="cp" class="form-control" placeholder="Codigo postal" value="{{$cli->CPostal}}">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Pais:</label>
										<input type="text" name="pais" class="form-control" placeholder="Pais" value="{{$cli->Pais}}">
									</div>
									<div class="form-group">
										<label class="control-label">Estado:</label>
										<input type="text" name="est" class="form-control" placeholder="Estado" value="{{$cli->Estado}}">
									</div>
									<div class="form-group">
										<label class="control-label">Ciudad:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Ciudad o municipio" value="{{$cli->Ciudad}}">
									</div>
									<div class="form-group">
										<label class="control-label">Telefono:</label>
										<input type="text" name="tel" class="form-control" placeholder="Telefono" value="{{$cli->Telefono}}">
									</div>
									<div class="form-group">
										<label class="control-label">E-mail:</label>
										<input type="text" name="email" class="form-control" placeholder="Correo electronico" value="{{$cli->Email}}">
									</div>
								</div>
								<div class="col-sm-12">
									<button class="btn btn-primary" id="btn_add"><span class="glyphicon glyphicon-ok"></span>&nbsp;Añadir</button>
									<button class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancelar</button>
								</div>
							</form>
						@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@stop