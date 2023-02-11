<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace app\controllers;
use wfm\Controller;
use app\models\AppModel;
use app\widgets\language\Language;
use wfm\App;
/**
 * Description of AppController
 *
 * @author Yerkebulan
 */
class AppController extends Controller{
    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
        
        App::$app->setProperty('languages', Language::getLanguages());
        debug(App::$app->getProperty('languages'));
    }
}
