<?php

namespace App;

use Database\DataBase;

class SocioEconomicController
{
    public function show(){

        $db = new DataBase();
        $setting = $db->select('SELECT * FROM websetting')->fetch();

        $data_ = $db->select('SELECT posts.*, author.fullname AS author_name , categories.name as cat_name, categories.code_name as code_name
                     FROM posts 
                     INNER JOIN author ON posts.author_id = author.id
					 INNER JOIN categories ON posts.cat_id = categories.id
					 WHERE  categories.type = 1 ');

        // Xu ly logic o day

        require_once (BASE_PATH . '/template/app/kinhte_xahoi.php');
    }

}