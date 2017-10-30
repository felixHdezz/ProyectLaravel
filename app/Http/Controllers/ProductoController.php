<?php

namespace SistelNetwork\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;


class ProductoController extends Controller
{
	public function create(){
		$mar = \SistelNetwork\Productos::_met_load_cmb_mark();
		$cat = \SistelNetwork\Productos::_met_load_cmb_cat();
		$pro = \SistelNetwork\Productos::_met_load_cmb_pro();

		return view('admin.productos.producto_create',['mar'=>$mar],['cat'=>$cat],['pro'=>$pro]);
	}
	public function store(Request $requests){
        $file = Input::file('image');
        $file->move(public_path().'/assets/img/img_products',$file->getClientOriginalName());
        $img=$file->getClientOriginalName();
        DB::insert("exec _SP_productos '1','".$requests['id']."','".$requests['pro']."','','".$requests['mark']."','".$requests['cat']."','".$requests['prove']."','".$requests['pv']."','".$requests['pc']."','".$requests['stock']."','".$requests['est']."','".$img."'");
		return redirect()->action('AdminController@get_product');
	}
	public function show($id){
	
	}
	public function edit($id){
		$users = \SistelNetwork\Productos::met_busca_user($id);
		$user = (object)$users;
		return view('admin.usuarios.usuarios_edit',['emp'=>$user]);
	}
	public function update(Request $requests){
		$file = Input::file('image');
        $file->move(public_path().'/assets/img/img_products',$file->getClientOriginalName());
        $img=$file->getClientOriginalName();

        DB::insert("exec _SP_productos '1','".$requests['id']."','".$requests['pro']."','','".$requests['mark']."','".$requests['cat']."','".$requests['prove']."','".$requests['pv']."','".$requests['pc']."','".$requests['stock']."','".$requests['est']."','".$img."'");
		return redirect()->action('AdminController@get_product');
	}
	public function destroy($id){
		\SistelNetwork\Productos::met_delete($id);
		return redirect()->action('AdminController@get_empleados');
	}
}