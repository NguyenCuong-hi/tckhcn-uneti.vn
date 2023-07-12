<?php

namespace App;

use Database\DataBase;

class ScienceTechController
{

    public function index()
    {
        $db = new DataBase();
        $setting = $db->select('SELECT * FROM websetting')->fetch();

        $query = 'SELECT posts.*, author.fullname AS author_name, 
                         categories.name as cat_name, 
                         categories.code_name as code_name FROM posts 
                     INNER JOIN author ON posts.author_id = author.id
					 INNER JOIN categories ON posts.cat_id = categories.id 
					 WHERE categories.type = 1 ORDER BY posts.created_at DESC ';

        $params = [];

        $keywords = null;
        if(isset($_GET['keyword'])){
            $keywords = $_GET['keyword'];
        }

        if (isset($_GET['title'])) {
            $query .= ' AND posts.title LIKE ?';
            $params[] = '%' . $_GET['keyword'] . '%';
        }

        if (isset($_GET['author'])) {
            $query .= ' AND author.fullname = ?';
            $params[] = $_GET['keyword'];
        }

        $data = $db->select($query, $params);

        $get_image_sidebar = $db->select('SELECT * FROM banners WHERE id IN (10, 11, 12)');

        $get_icon = $db->select("SELECT image FROM banners WHERE  id  = 18");


        $result = $db->select('SELECT COUNT(*) AS total_count FROM posts 
                     INNER JOIN author ON posts.author_id = author.id 
                     INNER JOIN categories ON posts.cat_id = categories.id WHERE categories.type = 1;');

//        Todo Xu ly phan trang
        $row = $result->fetch();
        $total_count = $row['total_count'];

        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
        $current_page =!empty($_GET['page']) ? $_GET['page'] : 1;
        $off_set = ( $current_page -1)* $item_per_page;

        $totalRecords = $row['total_count'];
        $totalPages = ceil($totalRecords / $item_per_page);

        require_once (BASE_PATH . '/template/app/khoahoc_congnghe.php');
    }
}