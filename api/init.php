<?php

include_once 'autoAppended/_loader.php';

ini_set('session.cookie_httponly',true);
ini_set('session.cookie_path',dirname(__FILE__));

session_name("UserBase");
session_start();

define('DS', DIRECTORY_SEPARATOR);
define('DIR', dirname(__DIR__));
define('THREE_MONTHS_COOKIE_EXPIRY', 7776000); // 90 days
define('JWTsecret__key', '`ADD YOUR KEY HERE`');

require "..".DS."..".DS."..".DS."Struct".DS."_init.php";
require DIR.DS.'vendor'.DS.'autoload.php';


if(isset($_options))
  include_once './src/'.$_options->FullPath.'.php';


?>
