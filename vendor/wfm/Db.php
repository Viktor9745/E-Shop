<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace wfm;

use RedBeanPHP\R;

/**
 * Description of Db
 *
 * @author Yerkebulan
 */
class Db {
    use TSingleton;
    private function __construct(){
        $db = require_once CONFIG.'/config_db.php';
        R::setup($db['dsn'],$db['user'],$db['password']);
        if(!R::testConnection()){
            throw new \Exception('No connection to DB',500);
        }
        R::freeze(true);
        if(DEBUG){
            R::debug(true, 3);
        }
    }
}
