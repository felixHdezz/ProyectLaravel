@extends('layouts.admin')
@section('content')
	<!-- <script type="text/javascript" src="{{ url('assets/js/admin/scrip_cargos.js')}}"></script> -->
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Puesto</h2>
        </div>
        <!-- /.col-lg-12 -->
	</div>
     <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registro de un nuevo puesto
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-offset-1">
							<form class="form" action="{{url('admin/carg/store')}}" method="post">
								{!! csrf_field() !!}
								<div class="form-group">
									<label class="control-label">Clave:</label>
									<input type="text" name="id" class="form-control" placeholder="Clave del cargo">
								</div>
								<div class="form-group">
									<label class="control-label">Cargo:</label>
									<input type="text" name="carg" class="form-control" placeholder="Puesto a registrar">
								</div>
								<div class="form-group">
									<label class="control-label">Descripcion del cargo:</label>
									<input type="text" name="des" class="form-control" placeholder="Descripcion del puesto">
								</div>
								<div class="form-group">
									<label class="control-label">Salario:</label>
									<input type="text" name="sal" class="form-control" placeholder="Salario para el puesto">
								</div>
								<div class="form-group">
									<label class="control-label">Estado:</label>
									<select class="form-control" id="option" name="est">
										<option value="act">Activo</option>
										<option value="inac">Cerrado</option>
									</select>
								</div>
								<button class="btn btn-primary" id="btn_guard"><span class="glyphicon glyphicon-ok"></span>&nbsp;Añadir</button>
								<button class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancelar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop