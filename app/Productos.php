<?php 
namespace SistelNetwork;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\eloquent\Model;
use Illuminate\Http\Request;

use App\Http\Requests;

class Productos extends Model
{
	
	public function __construct(){
		parents::__construct();
	}
	public static function get_list_product(){
		$result = DB::select("exec _SP_productos '4','','','','','','',0,0,'','',''");
		return $result;
	}
	public static function _met_load_cmb_mark() {
        $data = DB::select("select nch_clv_mar,vch_marca from tbl_marcas");
        return $data;
	}
    public static function _met_load_cmb_cat(){
        $data = DB::select("select nch_clv_cat,vch_nom_cat from tbl_categorias");
        return $data;
    }
    public static function _met_load_cmb_pro(){
        $data = DB::select("select nch_clv_prove,vch_nom_prove from tbl_proveedores");
        return $data;
    }
	public static function met_busca_user($id){
		$result =  DB::select("exec _SP_productos '5','".$id."','','','','','',0,0,'','',''");
		return $result;
	}
	public static function met_insert(Request $request){
		DB::insert("exec _SP_productos '1','".$request['id']."','".$request['pro']."','','".$request['mark']."','".$request['cat']."','".$request['prove']."','".$request['pv']."','".$request['pc']."','".$request['stock']."','".$request['est']."','".$img."'");
	}
	public static function met_update(Request $request){
		DB::insert("exec _SP_productos '2','".$request['id']."','".$request['pro']."','','".$request['mark']."','".$request['cat']."','".$request['prove']."','".$request['pv']."','".$request['pc']."','".$request['stock']."','".$request['est']."','".$img."'");
	}
	public static function met_delete($id){
		DB::delete("exec _SP_productos '4','".$id."','','','','','',0,0,'','',''");
	}
}