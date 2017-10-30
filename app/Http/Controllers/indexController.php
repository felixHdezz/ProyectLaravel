<?php
	namespace SistelNetwork\Http\Controllers;
	use Illuminate\Http\Request;
	use SistelNetwork\Http\Requests;
	use Illuminate\Support\Facades\DB;
	use Session;
	/**
	* 
	*/
	class indexController extends Controller
	{
		public function index(){
			return view('index');
		}
		public function index_catalog(){
			$products = \SistelNetwork\ConsultasUser::get_list_product();
			return view('client.index_user',['prods'=>$products]);
		}
		public function get_prod_rou(){
			$products = \SistelNetwork\ConsultasUser::get_list_product_rout();
			return view('client.prod_router',['prods'=>$products]);
		}
		public function get_prod_swi(){
			$products = \SistelNetwork\ConsultasUser::get_list_product_sw();
			return view('client.prod_sw',['prods'=>$products]);
		}
		public function get_prod_cabl(){
			$products = \SistelNetwork\ConsultasUser::get_list_product_cabl();
			return view('client.prod_cabl',['prods'=>$products]);
		}
		public function get_prod_ant(){
			$products = \SistelNetwork\ConsultasUser::get_list_product_ant();
			return view('client.prod_ant',['prods'=>$products]);
		}
		public function get_prod_ser(){
			$products = \SistelNetwork\ConsultasUser::get_list_product_serv();
			return view('client.prod_serv',['prods'=>$products]);
		}
		public function get_login(){
			return view('client.login_user');
		}
		public function get_new_user(){
			return view('client.new_client');
		}
		public function get_register_user(Request $request){
			$result = \SistelNetwork\ConsultasUser::met_insert_new_user($request);
			if ($result) {
				$resul = \SistelNetwork\ConsultasUser::met_busca_user($request['email']);
				foreach ($resul as $key => $value) {
					$id = $value->id;
				}
				Session::put('user', array($id,$request['nom'],$request['ap'],$request['email']));
			}
			return redirect()->action('indexController@index_catalog');
		}
		public function get_login_auth(Request $request){
			$result = \SistelNetwork\ConsultasUser::met_busca_user_login($request['email'],$request['pass']);
			if ($result) {
				foreach ($result as $user) {
					$id = $user->id;
					$nom = $user->vch_nom_cli;
					$ap = $user->vch_ap_cli;
				}
				Session::put('user',array($id,$nom,$ap,$request['email']));
				if (Session::get('pros_ped')) {
					return redirect()->action('indexController@get_pedido');
				}else{
					return redirect()->action('indexController@index_catalog');
				}
			}else{
				Session::flash('menssaje','Error usuario y/o contraseña incorrecto');
				return redirect('/login');
			}
		}
		public function get_logout(){
			Session::forget('user');
			return redirect()->action('indexController@index_catalog');
		}
		public function get_prod_deta($id){
			$product = \SistelNetwork\ConsultasUser::met_busca_product($id);
			return view('client.detal_product',['prod'=>$product]);
		}
		public function get_car(){
			return view('client.car');
		}
		public function get_add_carrito(Request $request){
			$product = \SistelNetwork\ConsultasUser::met_busca_product($request['cod']);
			foreach ($product as $key => $val) {
				$exis = $val->int_uni_exis;
			}
			if ($request['cant_prod'] <= $exis) {
				if (Session::get('car') != null) {
					$array[] = Session::get('car');
					$fund = false;
					$pos = 0;
					var_dump($array);
					for ($i=0; $i <count($array) ; $i++) { 
						if ($array[0] == $request['cod']) {
							$fund =  true;
							$pos = $i;
						}
					}
					if ($fund!= false) {
						$array[$i]['cant'] =  $array[$i]['cant'] + $request['cant_prod'];
						Session::put('car',$array);
					}else{
						$arraycar1 = array('cod' =>$request['cod'],'nom'=>$request['nom'],'pre'=>$request['pre'],
									   'img'=>$request['img'],'cant'=>$request['cant_prod']);
						array_push($array,$arraycar1);
						Session::put('car',$array);
					}
				}else{
					$arraycar = array('cod' =>$request['cod'],'nom'=>$request['nom'],'pre'=>$request['pre'],
									   'img'=>$request['img'],'cant'=>$request['cant_prod']);
					Session::put('car',$arraycar);
				}
				return redirect()->action('indexController@get_car');
			}else{
				Session::put('msg','Selecciona un cantidad menor, no esta en Stock');
				$product = \SistelNetwork\ConsultasUser::met_busca_product($request['cod']);
				return view('client.detal_product',['prod'=>$product]);
			}
		}
		public function get_destroycar(){
			Session::forget('car');
			Session::forget('art');
			Session::forget('total');
			return redirect()->action('indexController@index_catalog');
		}
		public function get_pedido(){
			if (Session::get('user')) {
				return view('client.process_pedido');
			}else{
				Session::put('pros_ped','Proceso pedido');
				return redirect()->action('indexController@get_login');
			}
		}
		public function get_pedido_final(Request $request){
			$arrayName = array(Session::get('user'));
            foreach ($arrayName as $key => $value) {
                $id = $value[0];
            }
            $art =Session::get('art');
            $tol = Session::get('total');
			$result = DB::insert("insert into tbl_pedidos values('".$request['nom']."','".$request['dir']."','".$request['cp']."','".$request['est']."','".$request['ciu']."','".$request['col']."','paypal','".$art."','".$tol."','".$id."')");
			if ($result) {
				$result = DB::select("select max(idp) as id from tbl_pedidos");
				foreach ($result as $key => $value) {
					$idp = $value->id;
				}
				if (Session::get('car')) {
					$array[] = Session::get('car');
					for ($i=0; $i < count($array); $i++) { 
						$cod = $array[$i]['cod'];
						$can = $array[$i]['cant'];
						DB::insert("insert into tbl_pedido_detalle values('".$idp."','".$cod."','".$can."')");
						DB::update("update tbl_productos set int_uni_exis = int_uni_exis - $can where vch_codigo = '".$cod."'");
					}
					Session::forget('car');
					Session::forget('art');
					Session::forget('total');
				}
				return redirect()->action("indexController@get_info_ped");
			}
		}
		public function get_info_ped(){
			return view('client.info_com');
		}
		public function get_cabl_estrcut(){
			return view('client.services.cableado_estruct');
		}
		public function get_redes_inalam(){
			return view('client.services.redes_inalam');
		}
		public function get_lifi(){
			return view('client.services.red_lifi');
		}
		public function get_presupuest(){
			return view('client.services.solit_presu');
		}
		public function get_soli_pre(Request $request){
			$result = DB::insert("insert into solitudpresupuesto values('".$request['nom']."','".$request['emp']."','".$request['email']."','".$request['tel']."','".$request['asu']."','".$request['ob']."')");
			if ($result) {
				return redirect('/serv/presup')->with('status','Solicitud enviada con exito');
			}
		}
	}