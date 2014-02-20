<?php
define('URL_BASE', dirname(dirname(dirname(__FILE__)))."/");
define('URL_CORE', 'core/');

/*
* Se obtiene el directorio o subdirectorios sobre el que se encuentra el sistema y se genera la ruta 
* absoluta y se guarda en la variable global LINKBASE.
*/
$php_self = explode('/', $_SERVER['PHP_SELF']);

unset($php_self[0]);
unset($php_self[count($php_self)]);
$subdir = "";
foreach ($php_self AS $dir) $subdir .= '/'.$dir;
define('LINK_BASE', $_SERVER['SERVER_NAME'].$subdir.'/');
/*
* Una vez generada la ruta absoluta se importante los archivos del core.
*/
require_once URL_BASE.'vendor/autoload.php';
require_once URL_BASE.'config.php';

/*
* Query Builder para PHP para poder tener una capa de cominicación con la BD desde PHP de manera facil usando
* el modulo de pixie. url: https://github.com/usmanhalalit/pixie
*/

$config = array(
            'driver'    => 'mysql', // Db driver
            'host'      => HOST,
            'database'  => DB,
            'username'  => USER,
            'password'  => PASSBD,
            'charset'   => 'utf8', // Optional
            'collation' => 'utf8_unicode_ci', // Optional
            'prefix'    => '' // Table prefix, optional
        );

new \Pixie\Connection('mysql', $config, 'QB');

/*
* Configuraciónes Iniciales para poder hacer funcionar Sentry dentro de la aplicación.
* Sentry permite gestionar usuarios, grupos de usuarios y sus permisos de manera sencilla.
*/

// Create an alias for our Facade
class_alias('Cartalyst\Sentry\Facades\Native\Sentry', 'Sentry');

// Setup our database
$dsn      = 'mysql:dbname='.DB.';host='.HOST;
Sentry::setupDatabaseResolver(new PDO($dsn, USER, PASSBD));

/*
* Se importan el archivo para poder importar las clases de PHPMailer
*/
require URL_BASE.'addons/PHPMailer/PHPMailerAutoload.php';

/*
* Metodo que permite obtener y vaciar en un arreglo la información del usuario logeado actual.
*/
$user = Sentry::getUser();

require_once URL_BASE.URL_CORE.'classes/Customs.class.php';
require_once URL_BASE.URL_CORE.'classes/Forms.class.php';
require_once URL_BASE.URL_CORE.'classes/Initializer.class.php';


//Esta metodo no permite cargar la pagina solicitada por medio del cache.
Customs::no_cache();

//Este metodo establece la zona horaria a la de America/Mexico_City, para evitar errores de imporesición con el tiempo en el sistema.
Customs::default_timezone();
