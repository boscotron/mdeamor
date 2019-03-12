<?php
/*
La licencia MIT (MIT)

Copyright (c) 2019 Concomsis S.A. de C.V.

Por la presente se otorga el permiso, sin cargo, a cualquier persona que obtenga una copia de
este software y los archivos de documentación asociados (el "Software"), para tratar en
el Software sin restricciones, incluidos, entre otros, los derechos de
usar, copiar, modificar, fusionar, publicar, distribuir, sublicenciar y / o vender copias de
el Software, y para permitir que las personas a quienes se suministra el Software lo hagan,
sujeto a las siguientes condiciones:

El aviso de copyright anterior y este aviso de permiso se incluirán en todas las
Copias o partes sustanciales del Software.

EL SOFTWARE SE PROPORCIONA "TAL CUAL", SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
IMPLÍCITOS, INCLUIDOS, PERO NO LIMITADOS A LAS GARANTÍAS DE COMERCIABILIDAD, APTITUD
PARA UN PROPÓSITO PARTICULAR Y NO INCUMPLIMIENTO. EN NINGÚN CASO LOS AUTORES O
LOS TITULARES DEL DERECHO DE AUTOR SERÁN RESPONSABLES POR CUALQUIER RECLAMACIÓN, DAÑOS U OTRAS RESPONSABILIDADES, SI
EN UNA ACCIÓN DE CONTRATO, CORTE O DE OTRA MANERA, DERIVADO DE, FUERA O EN
CONEXIÓN CON EL SOFTWARE O EL USO U OTRAS REPARACIONES EN EL SOFTWARE.
*/
class Carrito {
	public function ver(){
		$key = (is_array($_SESSION['JMY_car'][$_SESSION['JMY_car_s']])) ? array_keys($_SESSION['JMY_car'][$_SESSION['JMY_car_s']]) : false ;
		return ["key"=>$key,
				"lista"=>$_SESSION['JMY_car'][$_SESSION['JMY_car_s']],
			];
	}
	public function agregar($d){		
		$h=$d['JMY_HEADER'];
		unset($d['JMY_HEADER']);
		if($_SESSION['JMY_car_s']==""){
			$s=$this->session();
			$_SESSION['JMY_car_s']=$s;
		}		
		if(is_array($d) && count($d)>0){
			$tmp = $_SESSION['JMY_car'];
			unset($_SESSION['JMY_car']);
			$k=array_keys($d);
			$id=($d['id']!="")?$d['id']:uniqid("A_gen_c_");
			for($i=0;$i<count($k);$i++){
				$tmp[$this->session()][$id][$k[$i]] = $d[$k[$i]];
			}
			$_SESSION['JMY_car'] = $tmp;
		}
		return ["d"=>$d,"ver"=>$this->ver()];  
		//return $d; 
	}
	public function quitar($id){	
		if($id!=''){
			unset($_SESSION['JMY_car'][$this->session()][$id]);
		}
		return ["id"=>$id,"ver"=>$this->ver()]; 
		//return $d; 
	} 
	
	public function session(){
		return($_SESSION['JMY_car_s']=="")?uniqid("JMY_CAR"):$_SESSION['JMY_car_s'];		
	}
	
}


?>