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
                    Registrar un nuevo proveedor
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
							<form class="form" action="{{url('admin/prove/store')}}" method="post">
								{!! csrf_field() !!}
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Clave:</label>
										<input type="text" name="id" class="form-control" placeholder="Clave">
									</div>
									<div class="form-group">
										<label class="control-label">Proveedor:</label>
										<input type="text" name="pro" class="form-control" placeholder="Nombre del proveedor">
									</div>
									<div class="form-group">
										<label class="control-label">Contacto:</label>
										<input type="text" name="cont" class="form-control" placeholder="Contacto">
									</div>
									<div class="form-group">
										<label class="control-label">Cargo:</label>
										<input type="text" name="car" class="form-control" placeholder="Cargo del contacto">
									</div>
									<div class="form-group">
										<label class="control-label">Direccion:</label>
										<input type="text" name="direc" class="form-control" placeholder="Direccion">
									</div>
									<div class="form-group">
										<label class="control-label">Codigo postal:</label>
										<input type="text" name="cp" class="form-control" placeholder="Codigo postal">
									</div>
									<div class="form-group">
										<label class="control-label">Pais:</label>
										<input type="text" name="pais" class="form-control" placeholder="Pais">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Providencia:</label>
										<input type="text" name="provi" class="form-control" placeholder="Estado">
									</div>
									<div class="form-group">
										<label class="control-label">Ciudad:</label>
										<input type="text" name="ciu" class="form-control" placeholder="Ciudad">
									</div>
									<div class="form-group">
										<label class="control-label">Telefono:</label>
										<input type="text" name="tel" class="form-control" placeholder="Telefono">
									</div>
									<div class="form-group">
										<label class="control-label">E-mail:</label>
										<input type="text" name="email" class="form-control" placeholder="Correo electronico">
									</div>
									<div class="form-group">
										<label class="control-label">Fax:</label>
										<input type="text" name="fax" class="form-control" placeholder="Fax">
									</div>
									<div class="form-group">
										<label class="control-label">Web:</label>
										<input type="text" name="web" class="form-control" placeholder="Sitio web">
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
									<button class="btn btn-primary" id="btn_guard"><span class="glyphicon glyphicon-ok"></span>&nbsp;Añadir</button>
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