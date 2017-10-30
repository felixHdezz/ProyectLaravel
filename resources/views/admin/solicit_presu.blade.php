@extends('layouts.admin')
@section('content')
	<div class="row">
        <div class="col-lg-12">
             <h2 class="page-header"><span class="glyphicon glyphicon-list-alt"></span> Solicitud de presupuestos</h2>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<!-- <h2><span class="glyphicon glyphicon-list-alt"></span> Clientes</h2> -->
	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Listado de los presupuestos solicitados 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
						<div class="table-responsive">
						    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
						        <thead width="800">
						       		<tr>
						                <th>Nombre</th>
						                <th>Empresa</th>
						                <th>E-mail</th>
						                <th>Telefono</th>
						                <th>Asunto</th>
						                <th>Informacion</th>
						            </tr>
						        </thead>
						        <tbody>
						        	@foreach($sol as $sol)
						        		<tr>
						                    <td>{{$sol->nom_user}}</td>
						                    <td>{{$sol->nom_empre}}</td>
						                    <td>{{$sol->email}}</td>
						                    <td>{{$sol->tel}}</td>
						                    <td>{{$sol->asunt}}</td>
						                    <td>{{$sol->obser}}</td>
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