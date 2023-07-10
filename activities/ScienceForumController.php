<?php

namespace App;

use Database\DataBase;

class ScienceForumController
{
    public function index(){
        $db = new DataBase();

        // Xu ly logic o day
        $get_image_sidebar = $db->select('SELECT * FROM banners WHERE id IN (10, 11, 12)');

        require_once (BASE_PATH. '/template/app/diendan_khoahoc.php');
    }
}