<?php
	use Illuminate\Support\Facades\DB;
	$prouct = DB::select("select top 5 vch_nom_pro,dc_precXuni_venta from tbl_productos");
?>
@extends('layouts.admin')
@section('content')
	<script src="{{ url('/assets/js/morris-data.js')}}"></script>
	<style type="text/css">
		.grafic{
			width: 100%;
			height: auto;
		}
		.product{
			float: left;
			width: 450px;
			border-bottom: 1px solid #E2E2E2;
		}
		.product li{
			list-style: none;
			float: left;
			padding-right: 10px;
			padding-bottom: 5px; 
		}
		.product .nom_pro{
			width: 350px;
		}
		.product .prec li{
			width: 50px;
			text-align: right;
			float: right;
		}
        .col-img{
            margin: auto;
        }
        .panel-img .panel-body{
            width: 70%;
            margin: auto;
        }
        .panel-img .panel-body img{
            width: 100%;
        }
	</style>
	<!-- <script type="text/javascript" src="{{ url('assets/js/admin/scrip_cargos.js')}}"></script> -->
        <div class="col-lg-12">
            <h4 class="page-header"><span class="fa fa-home"></span> Area de inicio</h4>
        </div>
        <!-- /.col-lg-12 -->
     <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="col-lg-12 col-img">
                <div class="panel panel-default panel-img">
                   	<div class="panel-body">
                   		<img src="{{url('/assets/img/img.png')}}" width="50%">
                    </div>   
                </div>
			</div>
		</div>
		<div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Utlimos 5 productos agregardos
                </div>
                <div class="panel-body">
                @foreach($prouct as $pro)
                	<ul class="product">
                		<div class="nom_pro">
                			<li>{{$pro->vch_nom_pro}}</li>
                		</div>
                		<div class="prec">
                			<li>{{$pro->dc_precXuni_venta}}</li>
                		</div>
                	</ul>
                @endforeach
                </div>   		
			</div>
		</div>
		<div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Utlimos 5 productos agregardos
                </div>
                <div class="panel-body">
                @foreach($prouct as $pro)
                	<ul class="product">
                		<li>{{$pro->vch_nom_pro}}</li>
                		<li>{{$pro->dc_precXuni_venta}}</li>
                	</ul>
                @endforeach
                </div>   		
			</div>
		</div>
	</div>
@stop