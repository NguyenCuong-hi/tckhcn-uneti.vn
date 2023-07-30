<?php

namespace App;

use Database\DataBase;


class ViewDetailPostController
{

    public function index($id)
    {

        $db = new DataBase();
        $result_image = $db->select('SELECT  banners.* FROM banners WHERE id_post = ? ', [$id])->fetchAll();

        $qSql_getFile = 'SELECT posts.file, categories.type
                        FROM posts
                        INNER JOIN categories ON categories.id = posts.cat_id
                        WHERE posts.id = ? ';

        $qFile = 'SELECT file.*, categories.type FROM file 
                    INNER JOIN  categories ON categories.id = file.cat_id 
                    WHERE file.id_post = ?';
        $result_file = $db->select($qFile, [$id])->fetchAll();



        if (isset($result_file)) {
            foreach ($result_file as $file) {
                if (isset($file['type']) == 1 || isset($file['type']) == 2 || $file['type'] == 3) {
                    require_once(BASE_PATH . '/template/app/show_detail_post.php');
                } else {
                    require_once(BASE_PATH . '/template/app/show_detail.php');
                }
            }
        } else {
            echo "No data found.";
        }





//        $db = new DataBase();
//        $result_image = $db->select('SELECT  banners.* FROM banners WHERE id_post = ? ', [$id])->fetchAll();
//
//        $qSql_getFile = 'SELECT posts.file, categories.type
//                FROM posts
//                INNER JOIN categories ON categories.id = posts.cat_id
//                WHERE posts.id = ? ';
//        $result_file = $db->select($qSql_getFile, [$id])->fetch();
//
//        if ($result_file['type'] == 1 || $result_file['type'] == 2 || $result_file['type'] == 3) {
//            require_once(BASE_PATH . '/template/app/show_detail_post.php');
//        } else {
//            require_once(BASE_PATH . '/template/app/show_detail.php');
//        }


    }


}
