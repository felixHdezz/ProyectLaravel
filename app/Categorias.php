<?php 
namespace SistelNetwork;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;

class Categorias extends Model
{
	
	function __construct(){
		parents::__construct();
	}
	public static function get_list_cat(){
		$result = DB::select("exec _SP_categorias 's','','',''");
		return $result;
	}
	public static function met_busca_cat($id){
		$result = DB::select("exec _SP_categorias '5','".$id."','',''");
		return $result;
	}
	public static function met_insert(Request $request){
		DB::insert("exec _SP_categorias 'i','".$request['id']."','".$request['cat']."','".$request['des']."'");
	}
	public static function met_update(Request $request){
		DB::insert("exec _SP_categorias 'u','".$request['id']."','".$request['cat']."','".$request['des']."'");
	}
	public static function met_delete($id){
		DB::delete("exec _SP_categorias 'd','".$id."','',''");
	}
}