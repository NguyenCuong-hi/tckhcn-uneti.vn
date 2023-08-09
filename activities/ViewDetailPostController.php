<?php

namespace App;

use Database\DataBase;


class ViewDetailPostController
{

    public function index($id)
    {

        $db = new DataBase();
        $result_image = $db->select('SELECT banners.image FROM banners WHERE id_post = ? LIMIT 2', [$id])->fetchAll();


        $qFile = 'SELECT file.*, categories.type FROM file 
                    INNER JOIN  categories ON categories.id = file.cat_id 
                    WHERE file.id_post = ?';
        $result_file = $db->select($qFile, [$id])->fetchAll();



        if (isset($result_file)) {
            foreach ($result_file as $file) {
                if ($file['type'] == 1 || $file['type'] == 2 || $file['type'] == 3) {
                    require_once(BASE_PATH . '/template/app/show_detail_post.php');
                }
                else{
                    require_once(BASE_PATH . '/template/app/show_detail.php');
                }
            }
        } else {
            echo "No data found.";
        }


    }


}
