@extends('layouts.admin')
@section('content')
	<!-- <script type="text/javascript" src="{{ url('assets/js/admin/scrip_cargos.js')}}"></script> -->
	<div class="row">
        <div class="col-lg-12">
            <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Proveedor</h2>
        </div>
        <!-- /.col-lg-12 -->
	</div>
     <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actualizar proveedor
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                        @foreach($prov as $prov)
							<form class="form" action="{{url('admin/prove/update')}}" method="post">
								{{ method_field('PUT') }}
								{{ csrf_field() }}
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Clave:</label>
										<input type="text" name="id" class="form-control" placeholder="Clave" value="{{$prov->Clave}}">
									</div>
									<div class="form-group">
										<label class="control-label">Proveedor:</label>
										<input type="text" name="pro" class="form-control" placeholder="Nombre del proveedor" value="{{$prov->Proveedor}}">
									</div>
									<div class="form-group">
										<label class="control-label">Contacto:</label>
										<input type="text" name="cont" class="form-control" placeholder="Contacto" value="{{$prov->Contacto}}">
									</div>
									<div class="form-group">
										<label class="control-label">Cargo:</label>
										<input type="text" name="car" class="form-control" placeholder="Cargo del contacto" value="{{$prov->Cargo}}">
									</div>
									<div class="form-group">
										<label class="control-label">Direccion:</label>
										<input type="text" name="direc" class="form-control" placeholder="Direccion" value="{{$prov->Direccion}}">
									</div>
									<div class="form-group">
										<label class="control-label">Codigo postal:</label>
										<input type="text" name="cp" class="form-control" placeholder="Codigo postal" value="{{$prov->CPostal}}">
									</div>
									<div class="form-group">
										<label class="control-label">Pais:</label>
										<input type="text" name="pais" class="form-control" placeholder="Pais" value="{{$prov->Pais}}">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Providencia:</label>
										<input type="text" name="provi" class="form-control" placeholder="Estado" value="{{$prov->Providencia}}">
									</div>
									<div class="form-group">
										<label class="control-label">Ciudad:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Ciudad" value="{{$prov->Ciudad}}">
									</div>
									<div class="form-group">
										<label class="control-label">Telefono:</label>
										<input type="text" name="tel" class="form-control" placeholder="Telefono" value="{{$prov->Telefono}}">
									</div>
									<div class="form-group">
										<label class="control-label">E-mail:</label>
										<input type="text" name="email" class="form-control" placeholder="Correo electronico" value="{{$prov->Email}}">
									</div>
									<div class="form-group">
										<label class="control-label">Fax:</label>
										<input type="text" name="fax" class="form-control" placeholder="Fax" value="{{$prov->Fax}}">
									</div>
									<div class="form-group">
										<label class="control-label">Web:</label>
										<input type="text" name="web" class="form-control" placeholder="Sitio web" value="{{$prov->Web}}">
									</div>
									<div class="form-group">
										<label class="control-label">Estado:</label>
										<select class="form-control" id="option" name="est">
											<option value="act">Activo</option>
											<option value="inac">Cerrado</option>
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<button class="btn btn-primary" id="btn_guard"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Editar</button>
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