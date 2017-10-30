<?php 
namespace SistelNetwork;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;

class Empleados extends Model
{
	
	public function __construct(){
		parents::__construct();
	}
	public static function get_list_emp(){
		$result = DB::select("_SP_bus_cliet '3',''");
		return $result;
	}
	public static function _met_load_cmb_cargos() {
        $data = DB::select("select * from tbl_cargos");
        return $data;
	}
    public static function _met_load_cmb_depa(){
        $data = DB::select("select * from tbl_departamentos");
        return $data;
    }
    public static function _met_load_cmb_socur(){
        $data = DB::select("select * from tbl_sucursales");
        return $data;
    }
	public static function met_busca_user($id){
		$result =  DB::select("_SP_bus_cliet '2','".$id."'");
		return $result;
	}
	public static function met_insert(Request $request){
		DB::insert("_SP_clientes '1','".$request['id']."','".$request['pro']."','".$request['cont']."','".$request['car']."','".$request['direc']."','".$request['cp']."','".$request['pais']."','".$request['provi']."','".$request['ciu']."','".$request['tel']."','".$request['email']."','".$request['fax']."','".$request['web']."','".$request['est']."'");
	}
	public static function met_update(Request $request){
		DB::insert("_SP_clientes '2','".$request['id']."','".$request['pro']."','".$request['cont']."','".$request['car']."','".$request['direc']."','".$request['cp']."','".$request['pais']."','".$request['provi']."','".$request['ciu']."','".$request['tel']."','".$request['email']."','".$request['fax']."','".$request['web']."','".$request['est']."'");
	}
	public static function met_delete($id){
		DB::delete("_SP_clientes '3','".$id."','','','','','','','','',''");
	}
}