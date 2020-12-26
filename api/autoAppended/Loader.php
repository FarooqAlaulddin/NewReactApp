<?php


class Loader{

  protected $_pathTop = null;
  protected $_incoming_packet = null;
  protected $_options = null;
  protected $_params = null;

  function __construct($path,$incoming_packet) {
    $this->_pathTop = $path;
    $this->_incoming_packet = $incoming_packet;
    $this->_options = $incoming_packet->options;
    if(isset($incoming_packet->params))
      $this->_params = $incoming_packet->params;
  }


  public function loadFuncion(){
    $args = func_get_args();
    $FileNames = $this->getRFunc();

    for($i = 0;$i < count($FileNames); $i++){
        if($FileNames[$i] == $this->_options->RMethod){
          include $this->_pathTop.'\components\\'.$FileNames[$i].'.php';
          $func = $FileNames[$i];
          export($func($this->_incoming_packet));

        }
    }
  }


  public function getRFunc(){
    $i = 0;
    $FileNames = array();
    foreach (glob($this->_pathTop.'\components\*.php') as $filename)
    {
          $filename = substr($filename, strpos($filename, "\components\\") + 12);
          $filename = substr($filename, 0, -4);
          $FileNames[$i] = $filename;
          ++$i;
    }
    return $FileNames;
  }



}


?>
