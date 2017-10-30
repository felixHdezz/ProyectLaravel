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
                    Registrar nuevo usuario
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
							<form class="form" action="{{url('admin/users/store')}}" method="post">
								{!! csrf_field() !!}
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Clave:</label>
										<input type="text" name="id" class="form-control" placeholder="Clave usuario">
									</div>
									<div class="form-group">
										<label class="control-label">Nombre:</label>
										<input type="text" name="nom" class="form-control" placeholder="Nombre del usuario">
									</div>
									<div class="form-group">
										<label class="control-label">Apellido paterno:</label>
										<input type="text" name="ap" class="form-control" placeholder="Apellido parteno">
									</div>
									<div class="form-group">
										<label class="control-label">Apellido materno:</label>
										<input type="text" name="am" class="form-control" placeholder="Apellido materno">
									</div>
									<div class="form-group">
										<label class="control-label">Telefono:</label>
										<input type="text" name="tel" class="form-control" placeholder="Telefono">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Correo electronico:</label>
										<input type="text" name="email" class="form-control" placeholder="Correo eletronico">
									</div>
									<div class="form-group">
										<label class="control-label">Direccion:</label>
										<input type="text" name="direc" class="form-control" placeholder="Domicilio">
									</div>
									<div class="form-group">
										<label class="control-label">Estado:</label>
										<input type="text" name="esta" class="form-control" placeholder="Estado">
									</div>
									<div class="form-group">
										<label class="control-label">Ciudad:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Ciudad o municipio">
									</div>
									<div class="form-group">
										<label class="control-label">Estado:</label>
										<select class="form-control" id="option" name="est">
											<option value="act">Activo</option>
											<option value="inac">Cerrado</option>
										</select>
									</div>
								</div>
								&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" id="btn_add"><span class="glyphicon glyphicon-ok"></span>&nbsp;Añadir</button>
								<button class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancelar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@stop