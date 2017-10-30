<?php

namespace SistelNetwork\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SistelNetwork\Http\Requests;
use Session;
class AdminController extends Controller
{
    public function get_log(){
        return view('admin.login_admin');
    }
    public function get_log_auth(Request $request){
        $resul = DB::select("exec _SP_login '".$request['user']."','".$request['pass']."'");
        if ($resul) {
            foreach ($resul as $key => $value) {
                $rfc = $value->nch_rfc_empl;
                $nom = $value->nom;
                $carg = $value->vch_cargo;
            }
            Session::put('admin',array($rfc,$nom,$carg));
            return redirect()->action('AdminController@index');
        }else{
            Session::put('error','Usuario y/o contraseña incorrecto');
             return redirect('/log-admin');
        }
    }
    public function get_logout(){
        Session::forget('admin');
        return redirect('/log-admin');
    }
    public function index(){
        if (Session::get('admin')) {
            return view('admin.admin');
        }else{
            return redirect()->action('AdminController@get_log');
        }
    	
    }
    public function get_usuario(){ 
    	$users = \SistelNetwork\Usuarios::get_list_usuarios();
    	return view('admin.clientes_list',['users' => $users]);
    }
    public function get_prove(){
    	$proves = \SistelNetwork\Proveedores::get_list_prove();
    	return view('admin.proveedores_list',['proves' => $proves]);
    }
    public function get_cargos(){
    	$puetos = \SistelNetwork\Cargos::get_list_carg();
    	return view('admin.puestos_list',['puest'=>$puetos]);
    }
    public function get_cat(){
    	$cat = \SistelNetwork\Categorias::get_list_cat();
    	return view('admin.categorias_list',['cat'=>$cat]);
    }
    public function get_marcas(){
        $mar = \SistelNetwork\marcas::get_list_mar();
        return view('admin.marcas_list',['mar'=>$mar]);
    }
    public function get_clientes(){
        $client = \SistelNetwork\Clientes::get_list_clients();
        return view('admin.companias_list',['client'=>$client]);
    }
    public function get_empleados(){
        $empl = \SistelNetwork\Empleados::get_list_emp();
        return view('admin.empleados',['emp'=>$empl]);
    }
    public function get_product(){
        $produc = \SistelNetwork\Productos::get_list_product();
        return view('admin.productos_list',['prod'=>$produc]);
    }
    public function get_soli_presu(){
        $resul = DB::select('select * from solitudpresupuesto');
        return view('admin.solicit_presu',['sol'=>$resul]);
    }
}
