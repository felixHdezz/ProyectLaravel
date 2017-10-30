<?php 
namespace SistelNetwork;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;

class Clientes extends Model
{
	
	function __construct(){
		parents::__construct();
	}
	public static function get_list_clients(){
		$result = DB::select("exec _SP_clientesCompanias '4','','','','','','','','','','',''");
		return $result;
	}
	public static function met_busca_client($id){
		$result	= DB::select("exec _SP_clientesCompanias '5','".$id."','','','','','','','','','',''");
		return $result;
	}
	public static function met_insert(Request $request){
		DB::insert("exec _SP_clientesCompanias '1','".$request['id']."','".$request['com']."','".$request['cont']."','".$request['carg']."','".$request['dir']."','".$request['tel']."','".$request['email']."','".$request['pais']."','".$request['est']."','".$request['ciu']."','".$request['cp']."'");
	}
	public static function met_update(Request $request){
		DB::insert("exec _SP_clientesCompanias '2','".$request['id']."','".$request['com']."','".$request['cont']."','".$request['carg']."','".$request['dir']."','".$request['tel']."','".$request['email']."','".$request['pais']."','".$request['est']."','".$request['ciu']."','".$request['cp']."'");
	}
	public static function met_delete($id){
		DB::delete("exec _SP_clientesCompanias '3','','','','','','','','','','',''");
	}
}