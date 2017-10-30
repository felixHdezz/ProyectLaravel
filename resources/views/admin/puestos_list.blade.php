@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
             <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Puestos</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<!-- <h2><span class="glyphicon glyphicon-list-alt"></span> Clientes</h2> -->
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de todos los puestos 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
						<div class="table-responsive">
						    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
						        <thead>
						        	<tr>
							            <th>Clave</th>
							            <th>Puesto</th>
							            <th>Descripcion Puesto</th>
							            <th>Salario</th>
							            <th>Estado</th>
							            <th>Operaciones</th>
							        </tr>
						        </thead>
						        <tbody>
						        	@foreach($puest as $puest)
						        		<tr>
								            <td>{{$puest->Clave}}</td>
								            <td>{{$puest->Puesto}}</td>
								            <td>{{$puest->Descripcion}}</td>
								            <td>{{$puest->Salario}}</td>
								            <td>{{$puest->Estado}}</td>
								            <td><a href="{{ url('/admin/carg/edit/'.$puest->Clave) }}" class="btn btn-primary"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Editar</a>
								            <a href="{{ url('/admin/carg/delet/' . $puest->Clave ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Eliminar</a>
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