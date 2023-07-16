<?php

namespace App;

use Database\DataBase;


class ViewDetailPostController
{

    public function index($id){

        $db = new DataBase();
        $result_image = $db->select('SELECT  banners.* FROM banners WHERE id_post = ? ', [$id])->fetchAll();

        $qSql_getFile = 'SELECT posts.file FROM posts WHERE posts.id = ? ';
        $result_file = $db->select($qSql_getFile, [$id])->fetch();



        require_once(BASE_PATH . '/template/app/show_detail_post.php');

    }

    public function read_file($id){
        $db = new DataBase();



        require_once(BASE_PATH . '/template/app/show_detail_post.php');
    }

}
