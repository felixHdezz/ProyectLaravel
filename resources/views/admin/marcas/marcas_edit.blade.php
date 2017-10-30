@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Marca</h2>
        </div>
        <!-- /.col-lg-12 -->
	</div>
     <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actualizar marca
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
							@foreach($mar as $mar)
							<form class="form" action="{{url('admin/marc/update')}}" method="post">
								{{ method_field('PUT') }}
								{{ csrf_field() }}
								<div class="form-group">
									<label class="control-label">Clave:</label>
									<input type="text" name="id" class="form-control" placeholder="Clave del cargo" value="{{$mar->Clave}}">
								</div>
								<div class="form-group">
									<label class="control-label">Marca:</label>
									<input type="text" name="marc" class="form-control" placeholder="Puesto a registrar" value="{{$mar->Marca}}">
								</div>
								<button class="btn btn-primary" id="btn_add"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Editar</button>
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