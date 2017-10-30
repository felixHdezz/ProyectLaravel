@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
             <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Productos</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<!-- <h2><span class="glyphicon glyphicon-list-alt"></span> Clientes</h2> -->
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de todos los Productos 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
						<div class="table-responsive">
						    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
						        <thead>
						        	<tr>
							            <th>Codigo</th>
							            <th>Producto</t>
							            <th>Precio</th>
							            <th>Estatus</th>
							            <th>Operaciones</th>
							        </tr>
						        </thead>
						        <tbody>
						        	@foreach($prod as $prod)
						        		<tr>
								            <td>{{$prod->Codigo}}</td>
								            <td>{{$prod->Producto}}</td>
								            <td>{{$prod->Precioventa}}</td>
								            <td>{{$prod->Estado}}</td>
								            <td><a href="{{ url('/admin/product/edit/'.$prod->Codigo) }}" class="btn btn-primary"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Editar</a>
								            <a href="{{ url('/admin/product/delet/' . $prod->Codigo ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Eliminar</a>
								            </td>
							            </tr>
						            @endforeach
						        </tbody>
						    </table>
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop