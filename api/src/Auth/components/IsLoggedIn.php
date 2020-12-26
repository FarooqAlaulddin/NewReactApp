<?php
use Firebase\JWT\JWT;

function IsLoggedIn($incoming_packet){

  return true; // Remove ... 

  $token1 = JWT::decode($incoming_packet->header->Authorization, JWTsecret__key , array('HS256'));
  $token1 = (array)$token1;

  if($token1['IsLoggedIn'] && $token1['IsAdmin']){
    return true;
  }

  return false;

}



?>
