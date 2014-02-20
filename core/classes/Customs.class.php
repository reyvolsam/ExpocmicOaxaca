<?php
/*
* Clase para poder generar metodos que solamente retornaran un valor y que son independientes de todo el sistema.
* Se vuelve a pasar la función para cambiar la zona horaria, ya que esta clase se cargará muchas veces individualmente.
*/
Class Customs
{

	/*
	* Se estableece la zona horaria a la de Mexico_City en caso de que en el servidor web cambien la hora, lo cual puede
	* provocar errores de presición de tiempo en el sistema.
	*/
	public static function default_timezone()
	{
		date_default_timezone_set('America/Mexico_City');
	}

	/*
	* Metodo que incorpara dos funciones que no permiten que el contenido de una pagina se carge por medio del cache.
	*/
	public static function no_cache()
	{
		header("Cache-Control: no-cache");
		header("Pragma: no-cache");
	}

	/*
	* Metodo para obtnere la fecha y la hora actual.
	*/
	public static function LoadDate()
	{	
		self::no_cache();
		self::set_default_timezone();
		return Date("Y-m-d H:i:s");
	}

	/*
	* Metodo para obtner la IP real del dispositivo actual desde donde se esta accediendo al sistema.
	*/
	public static function GetRealIP()
	{
    	if (!empty($_SERVER['HTTP_CLIENT_IP']))
	        return $_SERVER['HTTP_CLIENT_IP'];
    	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
	        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    	return $_SERVER['REMOTE_ADDR'];
	}

    /*
    * Metodo para poder detectar cuando una petición vienee por ajax.
    */
	public static function responseAjax()
	{
	    if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	    	return true;
	    } else {
	    	return false;
	    }
	}
	
	/*
	* Metodo para poder encriptar una cadena, la cual se puede desencriptar.
	*/
	public static function encrypt($string){
		$key = 'f5BrC46';
   		$result = '';

  		$result = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key) )));
  		return $result;
	}

	/*
	* Metodo para poder desencriptar una cadena a partir de una cadena ya encriptada.
	*/
	public static function decrypt($string) {
		$key = 'f5BrC46';
	   	$result = '';
	   	$result = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
	   	return $result;
	}

	public static function SendEmail($email, $subject, $body){
		$mail = new PHPMailer;

       $mail->isSMTP();
        $mail->Host = 'mail.http://expocmicoaxaca.com.mx';
        $mail->SMTPAuth = true;
        $mail->Port = 26;//587
        $mail->Username = 'no-reply@http://expocmicoaxaca.com.mx';
        $mail->Password = 'Prueba1.';

        $mail->From = 'no-reply@http://expocmicoaxaca.com.mx';
        $mail->FromName = 'Expo CMIC Oaxaca';
        foreach ($email as $k) {
        	$mail->addAddress($k); 
        }
        
		$mail->isHTML(true);

		$mail->Subject = $subject;
		$mail->Body    = $body;
		return $mail->Send();
	}

}// Termina Customs