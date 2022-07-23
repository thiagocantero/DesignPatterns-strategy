<?php
/**   
 * Strategy Pattern 
 * @version 1.0   
 * @package Strategy
 * @subpackage LogParaArquivo 
 * @author Thiago Cantero Mari Monteiro   
 * @copyright Copyright (c) 2022 Thiago Cantero Mari Monteiro   
 * @license http://www.thiagocantero.com.br/sobre  
 **/

 namespace DesignPatterns;
 use DesignPatterns\InterfaceLogger;


class LogParaArquivo implements InterfaceLogger {

    public function log($data) {
        var_dump("O Log foi registrado em um arquivo!");
    }

}