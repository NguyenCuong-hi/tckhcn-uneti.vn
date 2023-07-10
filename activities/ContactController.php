<?php

namespace App;

use Database\DataBase;

class ContactController
{
    public function index(){
        $db = new DataBase();
        $get_image_sidebar = $db->select('SELECT * FROM banners WHERE id IN (10, 11, 12)');

        // xu ly logic o day


        require_once (BASE_PATH .'/template/app/lienhe.php');
    }



}