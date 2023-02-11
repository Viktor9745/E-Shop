<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
namespace app\controllers;

use app\models\Main;
use RedBeanPHP\R;


/** @property Main $model */
class MainController extends AppController{
    public function indexAction(){
        $slides = R::findAll('slider');
        $products = $this->model->get_hits(1, 6);
        $this->set(compact('slides', 'products'));
        $this->setMeta("Главная страница", 'description...', 'keywords...');
    }
}
