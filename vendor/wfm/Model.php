<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace wfm;

/**
 * Description of Model
 *
 * @author Yerkebulan
 */
abstract class Model {
    public array $attributes = [];
    public array $errors = [];
    public array $rules = [];
    public array $labels = [];
    
    public function __construct(){
        Db::getInstance();
    }
}
