<?php

namespace App;
use Database\DataBase;

class ViewCatalogController
{
    public function index ($id){


        $db = new DataBase();
        $result_image = $db->select('SELECT  banners.* FROM banners WHERE id_post ='.$id.'');
//        if ($result_image) {
//            $fetch_image = $result_image->fetch();
//        } else {
//            echo "Lỗi truy vấn SQL: " . $db->error;
//        }

        $qSql_getFile = 'SELECT posts.file FROM posts WHERE posts.id ='.$id. ' ';
        $result_image = $db->select($qSql_getFile);

        require_once (BASE_PATH . '/template/app/show-catalog.php');
    }

    public function get_catalog($get_id){
        $db = new DataBase();
        $result_image = $db->select(' SELECT  banners.* FROM banners WHERE id_post = ' . $get_id . ' ' );
        if ($result_image) {
            $fetch_image = $result_image->fetchAll();
        } else {
            echo "Lỗi truy vấn SQL: " . $db->error;
        }
        require_once (BASE_PATH . '/template/app/show-catalog.php');
    }

}