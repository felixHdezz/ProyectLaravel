@extends('layouts.admin')
@section('content')
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
                    Actualizacion del cargo
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10 col-md-offset-1">
							@foreach($puest as $puest)
							<form class="form" action="{{url('admin/carg/update/'.$puest->Clave)}}" method="post">
								{{ method_field('PUT') }}
								{{ csrf_field() }}
								<div class="form-group">
									<label class="control-label">Clave:</label>
									<input type="text" name="id" class="form-control" placeholder="Clave del cargo" value="{{$puest->Clave}}">
								</div>
								<div class="form-group">
									<label class="control-label">Cargo:</label>
									<input type="text" name="carg" class="form-control" placeholder="Puesto a registrar" value="{{$puest->Puesto}}">
								</div>
								<div class="form-group">
									<label class="control-label">Descripcion del cargo:</label>
									<input type="text" name="des" class="form-control" placeholder="Descripcion del puesto" value="{{$puest->Descripcion}}">
								</div>
								<div class="form-group">
									<label class="control-label">Salario:</label>
									<input type="text" name="sal" class="form-control" placeholder="Salario para el puesto" value="{{$puest->Salario}}">
								</div>
								<div class="form-group">
									<label class="control-label">Estado:</label>
									<select class="form-control" id="option" name="est">
										<option value="">Activo</option>
										<option value="">Cerrado</option>
									</select>
								</div>
								<button class="btn btn-primary" id="btn_add"><span class="glyphicon glyphicon-ok"></span>&nbsp;Editar</button>
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