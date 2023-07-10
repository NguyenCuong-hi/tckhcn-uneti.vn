<?php

namespace App;

use Database\DataBase;

class ExchageInfomation
{

    public function index(){
        $db = new DataBase();
        $get_image_sidebar = $db->select('SELECT * FROM banners WHERE id IN (10, 11, 12)');

        require_once (BASE_PATH . '/template/app/thongtin_traodoi.php');
    }

}