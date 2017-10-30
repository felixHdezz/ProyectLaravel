<?php

namespace SistelNetwork\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;


class ClienteController extends Controller
{
	// public function index(){
	// 	$puetos = \SistelNetwork\Cargos::get_list_carg();
 //    	return view('admin.puestos_list',['puest'=>$puetos]);
	// }
	public function create(){
		return view('admin.clientes.cliente_create');
	}
	public function store(Request $requests){
		\SistelNetwork\Clientes::met_insert($requests);
		return redirect()->action('AdminController@get_clientes');
	}
	public function show($id){
	
	}
	public function edit($id){
		$users = \SistelNetwork\Clientes::met_busca_client($id);
		$user = (object)$users;
		return view('admin.clientes.cliente_edit',['cli'=>$user]);
	}
	public function update(Request $requests){
		\SistelNetwork\Clientes::met_update($requests);
		return redirect()->action('AdminController@get_clientes');
	}
	public function destroy($id){
		\SistelNetwork\Clientes::met_delete($id);
		return redirect()->action('AdminController@get_clientes');
	}
}