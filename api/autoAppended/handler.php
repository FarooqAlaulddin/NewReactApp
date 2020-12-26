<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Mehods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$incoming_packet = json_decode(file_get_contents("php://input"));
$header = (object) getallheaders();

$incoming_packet->header = $header;

if(isset($incoming_packet->params)) $_params = $incoming_packet->params;
if(isset($incoming_packet->options)) $_options = $incoming_packet->options;
