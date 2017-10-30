<?php 
namespace SistelNetwork;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;

class Marcas extends Model
{
	
	function __construct(){
		parents::__construct();
	}
	public static function get_list_mar(){
		$result = DB::select("exec _SP_marcas 's','',''");
		return $result;
	}
	public static function met_busca_marc($id){
		$result	= DB::select("_SP_marcas 'id','".$id."',''");
		return $result;
	}
	public static function met_insert(Request $request){
		DB::insert("_SP_marcas 'i','".$request['id']."','".$request['marc']."'");
	}
	public static function met_update(Request $request){
		DB::insert("_SP_marcas 'u','".$request['id']."','".$request['marc']."'");
	}
	public static function met_delete($id){
		DB::delete("_SP_marcas 'd','".$id."',''");
	}
}