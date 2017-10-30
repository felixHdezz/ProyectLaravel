@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Empleado</h2>
        </div>
        <!-- /.col-lg-12 -->
	</div>
     <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registrar nuevo empleado
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
							<form class="form" action="{{url('admin/empl/store')}}" method="post">
								{!! csrf_field() !!}
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">RFC:</label>
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
										<label class="control-label">Sexo:</label>
										<input type="text" name="tel" class="form-control" placeholder="Telefono">
									</div>
									<div class="form-group">
										<label class="control-label">Fecha de nacimiento:</label>
										<input type="text" name="date" class="form-control" placeholder="Correo eletronico">
									</div>
									<div class="form-group">
										<label class="control-label">CURP:</label>
										<input type="text" name="direc" class="form-control" placeholder="Domicilio">
									</div>
									<div class="form-group">
										<label class="control-label">Direccion:</label>
										<input type="text" name="esta" class="form-control" placeholder="Estado">
									</div>
									<div class="form-group">
										<label class="control-label">Pais:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Pais de origen">
									</div>
									<div class="form-group">
										<label class="control-label">Providencia:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Estado">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Ciudad:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Ciudad">
									</div>
									<div class="form-group">
										<label class="control-label">Telefono:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Estado">
									</div>
									<div class="form-group">
										<label class="control-label">E-mail:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Estado">
									</div>
									<div class="form-group">
										<label class="control-label">Fecha contratacion:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Estado">
									</div>
									<div class="form-group">
										<label class="control-label">Escolaridad:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Estado">
									</div>
									<div class="form-group">
										<label class="control-label">E-mail:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Estado">
									</div>
									<div class="form-group">
										<label class="control-label">Cargo:</label>
										<select class="form-control" id="option" name="est">
											<option value="act">Activo</option>
											<option value="inac">Cerrado</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Departamento:</label>
										<select class="form-control" id="option" name="est">
											<option value="act">Activo</option>
											<option value="inac">Cerrado</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Sucursal:</label>
										<select class="form-control" id="option" name="est">
											<option value="act">Activo</option>
											<option value="inac">Cerrado</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Foto:</label>
										<input type="file" name="">
									</div>
								</div>
								<div class="col-sm-12">
									<button class="btn btn-primary" id="btn_add"><span class="glyphicon glyphicon-ok"></span>&nbsp;Añadir</button>
									<button class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancelar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@stop