<?php 
namespace SistelNetwork;
use Illuminate\Database\eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class Cargos extends Model
{
	
	function __construct(){
		parents::__construct();
	}
	public static function get_list_carg(){
		$result = DB::select("exec _SP_cargos '4','','','','',''");
		return $result;
	}
	public static function met_busca_carg($id){
		$result	= DB::select("_SP_cargos '5','".$id."','','','',''");
		return $result;
	}
	public static function met_insert(Request $reset){
		DB::insert("_SP_cargos '1','".$reset['id']."','".$reset['carg']."','".$reset['des']."','".$reset['sal']."','".$reset['est']."'");
	}
	public static function met_update_carg(Request $reset){
		DB::update("_SP_cargos '2','".$reset['id']."','".$reset['carg']."','".$reset['des']."','".$reset['sal']."','".$reset['est']."'");
	}
	public static function met_delete($id){
		DB::delete("_SP_cargos '3','".$id."','','','',''");
	}
}