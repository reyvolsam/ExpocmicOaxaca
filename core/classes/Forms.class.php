<?php
/*
* Clase para poder generar metodos que funcionaran auxiliando a los formularios.
*/
Class Forms
{
	/*
	* Metodo para poder validar un correo electronico en un formulario.
	*/
	public static function ValidateEmail($email){ 
   		$mail_correcto = 0; 
   		if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
      	 	if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 
         	 	if (substr_count($email,".")>= 1){ 
            	 	$term_dom = substr(strrchr ($email, '.'),1); 
            	 	if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
               	 		$antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
               	 		$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
               	 		if ($caracter_ult != "@" && $caracter_ult != "."){ 
                  			$mail_correcto = 1; 
               	 		} 
            	 	} 
         	 	} 
      	 	} 
   		} 
   		if ($mail_correcto) return 1; else return 0; 
	}

	/*
	* Metodo para poder generar contrañseas aleatorias de maxico 12 caracteres.
	*/
	public static function GeneratePassword(){
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$cad = "";
		for($i = 0; $i < 12; $i++) {
			$cad .= substr($str,rand(0,62),1);
		}
		return $cad;
	}

}// Termina Customs