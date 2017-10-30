@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
             <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Empleados</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<!-- <h2><span class="glyphicon glyphicon-list-alt"></span> Clientes</h2> -->
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de todos los empleados 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
						<div class="table-responsive">
						    <table class="table table-striped table-bordered table-hover" id="dataTables-example" width="1000">
						        <thead width="800">
						       		<tr>
						       			<th width="50">RFC</th>
							            <th width="110">Nombre</th>
							            <th width="65">Fecha contra</th>
							            <th width="100">Direccion</th>
							           	<th width="75">Telefono</th>
							            <th>Email</th>
							            <th>Estado</th>
							            <th width="250">Operaciones</th>
						       		</tr>
						        </thead>
						        <tbody>
						        	@foreach($emp as $empl)
						            	<tr>
						            		<td>{{$empl->RFC}}</td>
							                <td>{{$empl->Nombre}}</td>
							                <td>{{$empl->Fechacontratacion}}</td>
							                <td>{{$empl->Direccion}}</td>
							                <td>{{$empl->Telefono}}</td>
							                <td>{{$empl->Email}}</td>
							                <td>{{$empl->Estado}}</td>
							                <td>
							               		<a href="{{ url('/admin/empl/edit/'.$empl->RFC) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Editar</a>
							                 	<a href="{{ url('/admin/ampl/delete/'.$empl->RFC ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Eliminar</a>
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