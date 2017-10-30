<?php 
namespace SistelNetwork;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\eloquent\Model;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;

class ConsultasUser extends Model
{
	
	function __construct(){
		parents::__construct();
	}
	public static function get_list_product(){
		$result = DB::select("select * from tbl_productos");
		return $result;
	}
	public static function get_list_product_rout(){
		$result = DB::select("select * from tbl_productos where nch_clv_cat = 'rou'");
		return $result;
	}
	public static function get_list_product_sw(){
		$result = DB::select("select * from tbl_productos where nch_clv_cat = 'sw'");
		return $result;
	}
	public static function get_list_product_cabl(){
		$result = DB::select("select * from tbl_productos where nch_clv_cat = 'cabl'");
		return $result;
	}
	public static function get_list_product_ant(){
		$result = DB::select("select * from tbl_productos where nch_clv_cat = 'ant'");
		return $result;
	}
	public static function get_list_product_serv(){
		$result = DB::select("select * from tbl_productos where nch_clv_cat = 'serv'");
		return $result;
	}
	public static function met_busca_product($id){
		$result = DB::select("exec _SP_product '".$id."'");
		return $result;
	}
	public static function met_insert_new_user(Request $request){
		if(DB::insert("insert into tbl_clientes_pre values('".$request['nom']."','".$request['ap']."','','','".$request['email']."','','','','','','','','','".md5($request['password'])."')")){
			$val = true;
		}else{
			$val = false;
		}
		return $val;
	}
	public static function met_busca_user($email){
		$result = DB::select("select * from tbl_clientes_pre where vch_email = '".$email."'");
		return $result;
	}
	public static function met_busca_user_login($email,$pass){
		$passw = md5($pass);
		$result = DB::select("select *  from tbl_clientes_pre where vch_email ='".$email."' and vch_contraseña = '".$passw."'");
		return $result;
	}
}