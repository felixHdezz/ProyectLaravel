@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
             <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Usuarios</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<!-- <h2><span class="glyphicon glyphicon-list-alt"></span> Clientes</h2> -->
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de todos los usuarios 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
						<div class="table-responsive">
						    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
						        <thead >
						       		<tr>
						                <th width="100">Nombre</th>
						                <th>Direcccion</th>
						                <th>Telefono</th>
						                <th>Email</th>
						                <th>Ciudad</th>
						                <th>Estado</th>
						                <th>Operaciones</th>
						            </tr>
						        </thead>
						        <tbody>
						        	@foreach($users as $user)
						        		<tr>
						                    <td>{{$user->Nombre}}</td>
						                    <td>{{$user->Direccion}}</td>
						                    <td>{{$user->Telefono}}</td>
						                    <td>{{$user->Email}}</td>
						                    <td>{{$user->Ciudad}}</td>
						                    <td>{{$user->Estado}}</td>
						                    <td><a href="{{ url('/admin/users/edit/' . $user->Clave) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Editar</a>
						                    <a href="{{ url('/admin/users/delete/' . $user->Clave ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Eliminar</a>
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