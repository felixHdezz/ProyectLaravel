<?php

namespace SistelNetwork\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;


class CargoController extends Controller
{
	public function index(){
		$puetos = \SistelNetwork\Cargos::get_list_carg();
    	return view('admin.puestos_list',['puest'=>$puetos]);
	}
	
	public function create(){
		return view('admin.cargos.cargos_create');
	}
	public function store(Request $requests){
		\SistelNetwork\Cargos::met_insert($requests);
		return redirect()->action('CargoController@index');
	}
	public function show($id){
	
	}
	public function edit($id){
		$carg = \SistelNetwork\Cargos::met_busca_carg($id);
		$cargos = (object)$carg;
		return view('admin.cargos.cargos_edit',['puest'=>$cargos]);
	}
	public function update(Request $requests){
		\SistelNetwork\Cargos::met_update_carg($requests);
		return redirect()->action('CargoController@index');
	}
	public function destroy($id){
		\SistelNetwork\Cargos::met_delete($id);
		return redirect()->action('CargoController@index');
	}
}