<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace wfm;

/**
 * Description of view
 *
 * @author Yerkebulan
 */
class View {
    //put your code here
    public string $content = '';
    
    public function __construct(
            public $route,
            public $layout = '',
            public $view = '',
            public $meta = [],
    )
    {
        if(false!==$this->layout){
            $this->layout = $this->layout ?: LAYOUT;
        }
    }
    
    public function render($data)
    {
        if(is_array($data)){
            extract($data);
        }
        $prefix = str_replace('\\', '/', $this->route['admin_prefix']);
        $view_file = APP."/views/{$prefix}{$this->route['controller']}/{$this->view}.php";
        if(is_file($view_file)){
            require_once $view_file;
        }else{
            throw new \Exception("Не найден вид {$view_file}", 500);
        }
    }
}
