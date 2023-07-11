<?php

namespace App;

use Database\DataBase;

class ScienceForumController
{
    public function index(){
        $db = new DataBase();

        // Xu ly logic o day
        // Category type = 3
        $get_image_sidebar = $db->select('SELECT * FROM banners WHERE id IN (10, 11, 12)');

        $data = $db->select('SELECT posts.*, author.fullname AS author_name , categories.name as cat_name, categories.code_name as code_name
                     FROM posts 
                     INNER JOIN author ON posts.author_id = author.id
					 INNER JOIN categories ON posts.cat_id = categories.id WHERE type = 3;
					 ');

        require_once (BASE_PATH. '/template/app/diendan_khoahoc.php');
    }
}