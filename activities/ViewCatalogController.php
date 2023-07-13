<?php

namespace App;
use Database\DataBase;

class ViewCatalogController
{
    public function index ($get_id){
        $db = new DataBase();
        $query = 'SELECT posts.*, banners.* FROM posts 
                     INNER JOIN banners ON banners.id = posts.banner_id
					 WHERE posts.id = '. $get_id;
        $result = $db->select($query)->fetchAll();

        require_once (BASE_PATH . '/template/app/show-catalog.php ');

    }

}