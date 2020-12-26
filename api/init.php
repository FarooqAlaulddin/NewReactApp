<?php

include_once 'autoAppended/_loader.php';

ini_set('session.cookie_httponly',true);
ini_set('session.cookie_path',dirname(__FILE__));

session_name("UserBase");
session_start();

define('DS', DIRECTORY_SEPARATOR);
define('DIR', dirname(__DIR__));
define('THREE_MONTHS_COOKIE_EXPIRY', 7776000); // 90 days
define('JWTsecret__key', 'crfujxn2r5u8x/A?DG-KaPdSgVkYp3s6v9y$B&E)H@MbQeThWmZq4t7w!z%C*F-JaNdRfUjXn2r5u8x/A?D(G+KbPeShVkYp3s6v9y$B&E)H@McQQeThWmZqfTjWnZq4t7w!z%C*F-JaNdRgUkXp2s5u8x/A?D(G+KbPeShVmYq3t6w9z$B&E)H@McQfTjWnZr4u7x!A%D*F-JaNdRgUkXp2s5v8y/B?E(H+KbPeShVmYq3t6w9z$C&F)J@NcQfTjWnZr4u');

require "..".DS."..".DS."..".DS."Struct".DS."_init.php";
require DIR.DS.'vendor'.DS.'autoload.php';


if(isset($_options))
  include_once './src/'.$_options->FullPath.'.php';


?>
