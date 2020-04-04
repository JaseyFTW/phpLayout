<?php

  $config = [
    'MODEL_PATH' => APPLICATION_PATH . DS . 'model' . DS,
    'VIEW_PATH' => APPLICATION_PATH . DS . 'view' . DS,
    'LIB_PATH' => APPLICATION_PATH . DS . 'lib' . DS,
    'DATA_PATH' => APPLICATION_PATH . DS . 'data' . DS,
    'SITE_PATH' => 'phplayout/public/'
  ];

  require $config['LIB_PATH'] . 'functions.php';

  #print_r($config);

?>