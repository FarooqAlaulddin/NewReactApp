<?php

function export($_params){
  $data = func_get_args();

  $res = array(
    'params' => $data[0],
  );

  if(isset($data[1])){
    //array_push($res, $data[1]);
    $res['options'] = $data[1];
  }

  echo json_encode($res);

}
