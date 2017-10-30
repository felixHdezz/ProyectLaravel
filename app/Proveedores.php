<?php 
namespace SistelNetwork;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\eloquent\Model;
use Illuminate\Http\Request;

class Proveedores extends Model
{
	
	public function __construct(){
		parents::__construct();
	}
	public static function get_list_prove(){
		$result = DB::select("_SP_proveedores '4','','','','','','','','','','','','','',''");
		return $result;
	}
	public static function met_busca_prove($id){
		$result = DB::select("_SP_proveedores '5','".$id."','','','','','','','','','','','','',''");
		return $result;
	}
	public static function met_insert(Request $request){
		DB::insert("_SP_proveedores '1','".$request['id']."','".$request['pro']."','".$request['direc']."','".$request['cont']."','".$request['car']."','".$request['tel']."','".$request['fax']."','".$request['cp']."','".$request['pais']."','".$request['provi']."','".$request['ciu']."','".$request['email']."','".$request['web']."','".$request['est']."'");
	}
	public static function met_update(Request $request){
		DB::insert("_SP_proveedores '2','".$request['id']."','".$request['pro']."','".$request['direc']."','".$request['cont']."','".$request['car']."','".$request['tel']."','".$request['fax']."','".$request['cp']."','".$request['pais']."','".$request['provi']."','".$request['ciu']."','".$request['email']."','".$request['web']."','".$request['est']."'");
	}
	public static function met_delete($id){
		DB::delete("_SP_proveedores '3','".$id."','','','','','','','','','','','','',''");
	}
}