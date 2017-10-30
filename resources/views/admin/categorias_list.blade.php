@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
             <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Categorias</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<!-- <h2><span class="glyphicon glyphicon-list-alt"></span> Clientes</h2> -->
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de categorias
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
						<div class="table-responsive">
						    <table class="table table-striped table-bordered table-hover" id="dataTables-example" >
						        <thead >
						       		<tr>
						            	<th>Clave</th>
						                <th>Categoria</th>
						                <th>Descripcion</th>
						                <th>Operaciones</th>
						            </tr>
						        </thead>
						        <tbody>
						        	@foreach($cat as $cat)
						        		<tr>
						                    <td>{{$cat->Clave}}</td>
						                    <td>{{$cat->Categoria}}</td>
						                    <td>{{$cat->Descripcion}}</td>
						                    <td><a href="{{ url('/admin/cat/edit/' . $cat->Clave) }}" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;Editar</a>
						                    <a href="{{ url('/admin/cat/delete/' . $cat->Clave ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;Eliminar</a>
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