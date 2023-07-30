<?php

namespace App;

use Database\DataBase;

class NoticeController
{

    public function index()
    {
        // Category type = 4 : Thong bao

        $db = new DataBase();
        $setting = $db->select('SELECT * FROM websetting')->fetch();

        //        Todo phan trang
        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
        $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $off_set = ($current_page - 1) * $item_per_page;

        $query = 'SELECT posts.*, banners.image as banner_img FROM posts
					 INNER JOIN categories ON posts.cat_id = categories.id
                     INNER JOIN banners ON posts.id = banners.id_post 
					 WHERE (1=1) AND categories.type = 4 AND banners.type = 1 ';

        $query .= 'ORDER BY posts.created_at DESC 
					 LIMIT ' . $item_per_page . ' OFFSET ' . $off_set . '
					 ';

        $data = $db->select($query);

        $result = $db->select('SELECT COUNT(*) AS total_count FROM posts 
                     INNER JOIN categories ON posts.cat_id = categories.id WHERE categories.type = 4;');

        $row = $result->fetch();
        $total_count = $row['total_count'];

        $totalRecords = $row['total_count'];
        $totalPages = ceil($totalRecords / $item_per_page);


        require_once(BASE_PATH . '/template/app/thong-bao.php');
    }

}