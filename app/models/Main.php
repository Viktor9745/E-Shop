<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
namespace app\models;

use RedBeanPHP\R;
/**
 * Description of Main
 *
 * @author Yerkebulan
 */
class Main extends AppModel{
    public function get_hits($lang, $limit): array
    {
        return R::getAll("SELECT p.*, pd.* FROM product p JOIN product_description pd on p.id = pd.product_id WHERE p.status = 1 AND p.hit = 1 AND pd.language_id = ? LIMIT $limit", [$lang]);
    }
}
