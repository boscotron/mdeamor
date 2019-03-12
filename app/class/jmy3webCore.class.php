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
class JMY3WEBCORE{	
	public function acceso(){
		if($_SESSION['demo'][date('ymd')]){			
			$out = true;
		}elseif($_GET['demo']==date('m')){
			$_SESSION['demo'][date('ymd')] = true;
			$out = true;
		}else{$out = false;}		
		return $out;
	}
	public function estado_web(){
	
		/* post([	"id(optional)"=>221596241,
					"post"=array()
			]);*/
		$url =JMY_SERVER;
		$o['t']=["K"=>$this->tkn(null,1)];
		$o[$this->tkn('p')]=[$this->tkn('p')=>[$this->tkn('id')=>$d['id'],$this->tkn('post')=>base64_encode(json_encode($d['post'])),]];
		$tk=md5(json_encode($o));
		$o['M']=$tk;
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, $url);
		curl_setopt($ch,CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch,CURLOPT_POST, 1);
		curl_setopt($ch,CURLOPT_POSTFIELDS,["datos"=>base64_encode(json_encode($o))]);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
		$r= curl_exec($ch);
		$o['outa'] = $r;
		$o['out'] = json_decode($r,1);
		curl_close($ch);
		//return $o;

		return false;
	}
	private function tkn($c,$o=0,$p=[]){
		$K=($p['K']!='')? $p['K']:JMY_KEY;
		$S=($p['S']!='')? $p['S']:JMY_SECRET_KEY;
		return($o)?$K:md5($K.$S.date("YMd").$c);
		}
}
?>