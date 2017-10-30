@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
             <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Clientes</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<!-- <h2><span class="glyphicon glyphicon-list-alt"></span> Clientes</h2> -->
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de todos los clientes 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
						<div class="table-responsive">
						    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
						        <thead width="800">
						       		<tr>
						       			<th width="50">Compañia</th>
							            <th width="100">Contacto</th>
							            <th width="55">Cargo</th>
							            <th width="100">Direccion</th>
							           	<th width="75">Telefono</th>
							            <th>Email</th>
							            <th width="200">Operaciones</th>
						       		</tr>
						        </thead>
						        <tbody>
						        	@foreach($client as $client)
						            	<tr>
						            		<td>{{$client->Compania}}</td>
							                <td>{{$client->Contacto}}</td>
							                <td>{{$client->Cargo}}</td>
							                <td>{{$client->Direccion}}</td>
							                <td>{{$client->Telefono}}</td>
							                <td>{{$client->Email}}</td>
							                <td>
							               		<a href="{{ url('/admin/client/edit/'.$client->Clave) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Editar</a>
							                 	<a href="{{ url('/admin/client/delete/'.$client->Clave ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Eliminar</a>
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