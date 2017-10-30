<?php
	session_start();
	foreach ($prod as $pro) {
		$porExis = $pro->exis;
		$codpro = $pro->cod;
	}
	if ($cant <= $porExis) {
		if (isset($_SESSION['deta_carr'])) {
			$array = $_SESSION['deta_carr'];
			$foundProd = false;
			$position =0;
			for ($i=0; $i < count($array); $i++) { 
				if ($array[$i]['Id'] == $codpro) {
					$foundProd = true;
					$position = $i;
				}
			}
			if ($foundProd) {
				$array[$position]['cant'] = $array[$position]['cant'] + $cant;
				$_SESSION['deta_carr'] = $array;
			}else{
				foreach ($prod as $prod) {
					$arrayNewCarr[] = array('Id'=>$prod->vch_codigo,'nom'=>$prod->vch_nom_pro,
									 'img'=>$prod->img,'prec'=>$prod->dc_precXuni_venta,'cant'=>$cant);
				}
				array_push($array, $arrayNewCarr);
				$_SESSION['deta_carr'] = $array;
			}
		}else{
			foreach ($prod as $prod) {
				$arrayCarr[] = array('Id'=>$prod->vch_codigo,'nom'=>$prod->vch_nom_pro,
									 'img'=>$prod->img,'prec'=>$prod->dc_precXuni_venta,'cant'=>$cant);
			}
			$_SESSION['deta_carr'] = $arrayCarr;
		}
		
	}else{
		echo "Error";
		echo "".$cant;
		echo "".$porExis;
		echo "".$codpro;
	}
	header("location:url('/catalog')");
?>