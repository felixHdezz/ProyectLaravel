<?php 
namespace SistelNetwork;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;

class Usuarios extends Model
{
	
	public function __construct(){
		parents::__construct();
	}
	public static function get_list_usuarios(){
		$result = DB::select("_SP_clientes '4','','','','','','','','','',''");
		return $result;
	}
	public static function met_busca_user($id){
		$result =  DB::select("_SP_clientes '5','".$id."','','','','','','','','',''");
		return $result;
	}
	public static function met_insert(Request $request){
		DB::insert("_SP_clientes '1','".$request['id']."','".$request['nom']."','".$request['ap']."','".$request['am']."','".$request['tel']."','".$request['email']."','".$request['direc']."','".$request['esta']."','".$request['ciu']."','".$request['est']."'");
	}
	public static function met_update(Request $request){
		DB::update("_SP_clientes '2','".$request['id']."','".$request['nom']."','".$request['ap']."','".$request['am']."','".$request['tel']."','".$request['email']."','".$request['direc']."','".$request['esta']."','".$request['ciu']."','".$request['est']."'");
	}
	public static function met_delete($id){
		DB::delete("_SP_clientes '3','".$id."','','','','','','','','',''");
	}
}