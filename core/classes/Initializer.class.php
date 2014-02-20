<?php
/*
* Clase que permitira gestionar las validaciones y los datos que se deben de cargar antes de que se carge algo mas del sistema.
*/
Class Initializer
{
	/*
	* Verifica si el usuario ha iniciado sesión, sino lo ha hecho es redireccionado a login.php
	*/
	public static function LoggedIn()
	{
		if ( !Sentry::check() ){
    		header('Location: http://'.LINK_BASE.'login.php');
		}
	}

	/*
	* Verifica si es usuario ha iniciado sesión, sino lo ha hecho es redireccionado a index.php
	* Esta función solo se cargara cuando se este accesando por medio de login.php
	*/
	public static function LoggedInLogin()
	{
		if ( Sentry::check() ){
			header('Location: http://'.LINK_BASE.'index.php');
		}
	}

	/*
	* Metodo para poder cerrar la sesión actual del sistema, borra todos los datos actuales del usuario y redirecciona a
	* login.php. Si se accede y no se ha iniciado sesión de igual forma redirecciona a login.php, pero no borrar nada.
	*/
	public static function LogginOut()
	{
		Sentry::logout();
		header('Location: http://'.LINK_BASE.'index.php');
	}

}//termina Initializer