<?php

namespace SistelNetwork\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;


class CategoriaController extends Controller
{
	public function index(){
		$puetos = \SistelNetwork\Cargos::get_list_carg();
    	return view('admin.puestos_list',['puest'=>$puetos]);
	}
	
	public function create(){
		return view('admin.categorias.categorias_create');
	}
	public function store(Request $requests){
		\SistelNetwork\Categorias::met_insert($requests);
		return redirect()->action('AdminController@get_cat');
	}
	public function show($id){
	
	}
	public function edit($id){
		$cats = \SistelNetwork\Categorias::met_busca_cat($id);
		$cat = (object)$cats;
		return view('admin.categorias.categorias_edit',['cat'=>$cat]);
	}
	public function update(Request $requests){
		\SistelNetwork\Categorias::met_update($requests);
		return redirect()->action('AdminController@get_cat');
	}
	public function destroy($id){
		\SistelNetwork\Categorias::met_delete($id);
		return redirect()->action('AdminController@get_cat');
	}
}