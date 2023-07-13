<?php

namespace App;

use Database\DataBase;

class NoticeController
{

    public function index()
    {

        $db = new DataBase();
        $setting = $db->select('SELECT * FROM websetting')->fetch();

        $query = 'SELECT posts.*
                     FROM posts
					 INNER JOIN categories ON posts.cat_id = categories.id
					 WHERE categories.type = 2 ORDER BY posts.created_at DESC';


        $data = $db->select($query);

        $get_image_sidebar = $db->select('SELECT * FROM banners WHERE id IN (10, 11, 12)');

        require_once(BASE_PATH . '/template/app/thong-bao.php');
    }

}