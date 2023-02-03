<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace wfm;

/**
 * Description of Controller
 *
 * @author Yerkebulan
 */
abstract class Controller {
    //put your code here
    public array $data  = [];
    public array $meta = ['title'=>'', 'description'=>'', 'keywords'=>''];
    public false|string $layout = '';
    public string $view = '';
    public object $model;
    
    public function __construct(public $route = []){
        
    }
    
    public function getModel(){
        $model = 'app\models\\'.$this->route['admin_prefix'].$this->route['controller'];
        if(class_exists($model)){
            $this->model = new $model();
        }
    }
    
    public function getView(){
        $this->view = $this->view ?: $this->route['action'];
        (new View($this->route, $this->layout, $this->view, $this->meta))->render($this->data);
    }
    
    public function set($data){
        $this->data = $data;
    }
    
    public function setMeta($title = '', $description = '', $keywords = ''){
        $this->meta = [
            'title'=>$title,
            'description'=>$description,
            'keywords'=>$keywords,
        ];
    }
}
