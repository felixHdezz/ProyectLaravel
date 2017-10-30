<?php

namespace SistelNetwork\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;


class EmpleadoController extends Controller
{
	// public function index(){
	// 	$puetos = \SistelNetwork\Cargos::get_list_carg();
 //    	return view('admin.puestos_list',['puest'=>$puetos]);
	// }
	public function create(){
		return view('admin.empleados.empleado_create');
	}
	public function store(Request $requests){
		\SistelNetwork\Empleados::met_insert($requests);
		return redirect()->action('AdminController@get_empleados');
	}
	public function show($id){
	
	}
	public function edit($id){
		$users = \SistelNetwork\Usuarios::met_busca_user($id);
		$user = (object)$users;
		return view('admin.usuarios.usuarios_edit',['emp'=>$user]);
	}
	public function update(Request $requests){
		\SistelNetwork\Usuarios::met_update($requests);
		return redirect()->action('AdminController@get_empleados');
	}
	public function destroy($id){
		\SistelNetwork\Usuarios::met_delete($id);
		return redirect()->action('AdminController@get_empleados');
	}
}