@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Categoria</h2>
        </div>
        <!-- /.col-lg-12 -->
	</div>
     <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Registrar nuevo categoria
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
							<form class="form" action="{{url('admin/cat/store')}}" method="post">
								{!! csrf_field() !!}
								<div class="form-group">
									<label class="control-label">Clave:</label>
									<input type="text" name="id" class="form-control" placeholder="Clave del cargo">
								</div>
								<div class="form-group">
									<label class="control-label">Categoria:</label>
									<input type="text" name="cat" class="form-control" placeholder="Puesto a registrar">
								</div>
								<div class="form-group">
									<label class="control-label">Descripcion del cargo:</label>
									<input type="text" name="des" class="form-control" placeholder="Descripcion del puesto">
								</div>
								<button class="btn btn-primary" id="btn_add"><span class="glyphicon glyphicon-ok"></span>&nbsp;Añadir</button>
								<button class="btn btn-warning"><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancelar</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
@stop