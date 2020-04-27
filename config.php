<?php
require 'environment.php';
define("BASE_URL","http://localhost:8081/contaazul");
global $config;
$config= array();
if (ENVIRONMENT=="development"){
    $config['dbname']='contaazul';
    $config['host']='localhost';
    $config['dbuser']='root';
    $config['dbpass']='';
} else{
    //entrar com os dados de um outro ambiente, como o de produção, por exemplo.
}

