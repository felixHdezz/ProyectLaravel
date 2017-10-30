@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
             <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Proveedores</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<!-- <h2><span class="glyphicon glyphicon-list-alt"></span> Clientes</h2> -->
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de los proveedores 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
						<div class="table-responsive">
						    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
						        <thead width="800">
						       		<tr>
						                <th>Proveedor</th>
						                <th>Contacto</th>
						                <th>Cargo</th>
						                <th>Direccion</th>
						                <th>Telefono</th>
						                <th>Fax</th>
						                <th>Operaciones</th>
						            </tr>
						        </thead>
						        <tbody>
						        	@foreach($proves as $prove)
						        		<tr>
						                    <td>{{$prove->Proveedor}}</td>
						                    <td>{{$prove->Contacto}}</td>
						                    <td>{{$prove->Cargo}}</td>
						                    <td>{{$prove->Direccion}}</td>
						                    <td>{{$prove->Telefono}}</td>
						                    <td>{{$prove->Fax}}</td>
						                    <td><a href="{{ url('/admin/prove/edit/'.$prove->Clave) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Editar</a>
						                    <a href="{{ url('/admin/prove/delete/'.$prove->Clave ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Eliminar</a>
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