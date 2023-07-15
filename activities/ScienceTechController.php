<?php

namespace App;

use Database\DataBase;

class ScienceTechController
{

    public function index()
    {

        // Category type = 1
        $db = new DataBase();
        $setting = $db->select('SELECT * FROM websetting')->fetch();

        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
        $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $off_set = ($current_page - 1) * $item_per_page;

        $query = 'SELECT posts.* , categories.name as cat_name, categories.code_name as code_name
                     FROM posts 
                     INNER JOIN categories ON posts.cat_id = categories.id 
                     WHERE categories.type = 1 ';
        $params = [];
        $keywords = null;
        if (isset($_GET['keyword'])) {
            $keywords = $_GET['keyword'];
        }
        if (isset($_GET['title'])) {
            $query .= ' AND posts.title LIKE ?';
            $params[] = '%' . $_GET['keyword'] . '%';
        }
        if (isset($_GET['author'])) {
            $query .= ' AND posts.author_name LIKE ?';
            $params[] = '%' . $_GET['keyword'] . '%';
        }

        $query .= ' ORDER BY posts.created_at DESC LIMIT ' . $item_per_page . ' OFFSET ' . $off_set . ' ';
        $data = $db->select($query, $params);


        $result = $db->select('SELECT COUNT(*) AS total_count FROM posts 
                     INNER JOIN categories ON posts.cat_id = categories.id WHERE categories.type = 1;');

//        Todo Xu ly phan trang
        $row = $result->fetch();
        $total_count = $row['total_count'];

        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
        $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $off_set = ($current_page - 1) * $item_per_page;

        $totalRecords = $row['total_count'];
        $totalPages = ceil($totalRecords / $item_per_page);

        require_once(BASE_PATH . '/template/app/khoahoc_congnghe.php');
    }


}