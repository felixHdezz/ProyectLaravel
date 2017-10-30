<?php

namespace SistelNetwork\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;


class MarcaController extends Controller
{
	// public function index(){
	// 	$puetos = \SistelNetwork\Cargos::get_list_carg();
 //    	return view('admin.puestos_list',['puest'=>$puetos]);
	// }
	public function create(){
		return view('admin.marcas.marcas_create');
	}
	public function store(Request $requests){
		\SistelNetwork\Marcas::met_insert($requests);
		return redirect()->action('AdminController@get_marcas');
	}
	public function show($id){
	
	}
	public function edit($id){
		$marcs = \SistelNetwork\Marcas::met_busca_marc($id);
		$mar = (object)$marcs;
		return view('admin.marcas.marcas_edit',['mar'=>$mar]);
	}
	public function update(Request $requests){
		\SistelNetwork\Marcas::met_update($requests);
		return redirect()->action('AdminController@get_marcas');
	}
	public function destroy($id){
		\SistelNetwork\Marcas::met_delete($id);
		return redirect()->action('AdminController@get_marcas');
	}
}