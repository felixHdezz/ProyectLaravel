@extends('layouts.admin')
@section('content')
	<!-- <script type="text/javascript" src="{{ url('assets/js/admin/scrip_cargos.js')}}"></script> -->
        <div class="col-lg-12">
            <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Producto</h2>
        </div>
        <!-- /.col-lg-12 -->
     <!-- /.row -->
     <script type="text/javascript">
     /*$(document).ready(function(){
     	$('#btn_guard').click(function(){
     		var img = $('#img').val();
     		alert(img);
     	});
     });*/
     </script>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Actualizar producto
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
							<form class="form" action="{{url('admin/produc/update')}}" method="post" enctype="multipart/form-data">
								{{ method_field('PUT') }}
								{{ csrf_field() }}
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Codigo:</label>
										<input type="text" name="id" class="form-control" placeholder="Codigo del producto">
									</div>
									<div class="form-group">
										<label class="control-label">Producto:</label>
										<input type="text" name="pro" class="form-control" placeholder="Nombre del producto">
									</div>
									<div class="form-group">
										<label class="control-label">Marca:</label>
										<select class="form-control" name="mark">
											@foreach($mar  as $mark)
												<option value="{{$mark->nch_clv_mar}}">{{$mark->vch_marca}}</option>
											@endforeach
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Categoria:</label>
										<select class="form-control" name="cat">
										@foreach($cat  as $cat)
											<option value="{{$cat->nch_clv_cat}}">{{$cat->vch_nom_cat}}</option>
										@endforeach
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Proveedor:</label>
										<select class="form-control" name="prove">
										<?php
										use Illuminate\Support\Facades\DB;
										$pro = DB::select("select nch_clv_prove,vch_nom_prove from tbl_proveedores");
										?>
										@foreach($pro as $pro)
											<option value="{{$pro->nch_clv_prove}}">{{$pro->vch_nom_prove}}</option>
											}
										@endforeach
										</select>
									</div>
									
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label class="control-label">Precio venta:</label>
										<input type="text" name="pv" class="form-control" placeholder="Precio venta">
									</div>
									<div class="form-group">
										<label class="control-label">Precio compra:</label>
										<input type="text" name="pc" class="form-control" placeholder="Precio compra">
									</div>
									<div class="form-group">
										<label class="control-label">En stock:</label>
										<input type="text" name="stock" class="form-control" placeholder="Producto en existencia">
									</div>
									<div class="form-group">
										<label class="control-label">Estado:</label>
										<select class="form-control" id="option" name="est">
											<option value="act">Activo</option>
											<option value="inac">Cerrado</option>
										</select>
									</div>
									<div class="form-group">
										<label class="control-label">Imagen:</label>
										<input type="file" name="image" id="img">
									</div>
								</div>
								<div class="col-sm-12">
									<button type="submit" class="btn btn-primary" id="btn_guard"><span class="glyphicon glyphicon-ok"></span>&nbsp;Añadir</button>
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