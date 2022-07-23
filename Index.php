<?php
/**   
 * Strategy Pattern 
 * @version 1.0   
 * @package Index
 * @author Thiago Cantero Mari Monteiro   
 * @copyright Copyright (c) 2022 Thiago Cantero Mari Monteiro   
 * @license http://www.thiagocantero.com.br/sobre  
 **/
require_once("vendor/autoload.php");
use DesignPatterns\InterfaceLogger;
use DesignPatterns\LogParaArquivo;
use DesignPatterns\LogParaBancoDados;

class Index {

    public function log($data, InterfaceLogger $logger) {         
        $logger = $logger ?: new LogParaArquivo;
        $logger->log($data);
    }

}

$app = new Index();
$app->log("Log", new LogParaArquivo);
$app->log("Log", new LogParaBancoDados);
