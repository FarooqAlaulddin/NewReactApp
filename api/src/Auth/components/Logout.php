<?php
use Firebase\JWT\JWT;

function Logout($incoming_packet){

  return true; // Remove

  $token1 = JWT::decode($incoming_packet->header->Authorization, JWTsecret__key , array('HS256'));
  $token1 = (array)$token1;

  return ($token1['SERVER_NAME_WSWDurl']);
}


?>
