<?php

namespace SistelNetwork\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;


class ProveedorController extends Controller
{
	// public function index(){
	// 	$puetos = \SistelNetwork\Cargos::get_list_carg();
 //    	return view('admin.puestos_list',['puest'=>$puetos]);
	// }
	public function create(){
		return view('admin.proveedores.proveedor_create');
	}
	public function store(Request $requests){
		\SistelNetwork\Proveedores::met_insert($requests);
		return redirect()->action('AdminController@get_prove');
	}
	public function show($id){
	
	}
	public function edit($id){
		$prov = \SistelNetwork\Proveedores::met_busca_prove($id);
		$prove = (object)$prov;
		return view('admin.proveedores.proveedor_edit',['prov'=>$prove]);
	}
	public function update(Request $requests){
		\SistelNetwork\Proveedores::met_update($requests);
		return redirect()->action('AdminController@get_prove');
	}
	public function destroy($id){
		\SistelNetwork\Proveedores::met_delete($id);
		return redirect()->action('AdminController@get_prove');
	}
}