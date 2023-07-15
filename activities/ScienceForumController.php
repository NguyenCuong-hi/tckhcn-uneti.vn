<?php

namespace App;

use Database\DataBase;

class ScienceForumController
{
    public function index(){
        $db = new DataBase();

        // Xu ly logic o day
        // Category type = 3

        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 4;
        $current_page =!empty($_GET['page']) ? $_GET['page'] : 1;
        $off_set = ( $current_page -1)* $item_per_page;


        $sql = 'SELECT posts.*,categories.name as cat_name, categories.code_name as code_name FROM posts 
					 INNER JOIN categories ON posts.cat_id = categories.id WHERE categories.type = 3 ';


        $params = [];
        $keywords = null;
        if(isset($_GET['keyword'])){
            $keywords = $_GET['keyword'];
        }
        if (isset($_GET['title'])) {
            $sql .= ' AND posts.title LIKE ?';
            $params[] = '%' . $_GET['keyword'] . '%';
        }
        if (isset($_GET['author'])) {
            $sql .= ' AND posts.author_name LIKE ?';
            $params[] = '%' . $_GET['keyword'] . '%';
        }


        $sql.= 'ORDER BY posts.created_at DESC 
					 LIMIT '.$item_per_page.' OFFSET '.$off_set.'
					 ';
        $data = $db->select($sql, $params);

        $result = $db->select('SELECT COUNT(*) AS total_count FROM posts 
                     INNER JOIN categories ON posts.cat_id = categories.id WHERE categories.type = 3;');

        $row = $result->fetch();
        $total_count = $row['total_count'];

        $totalRecords = $row['total_count'];
        $totalPages = ceil($totalRecords / $item_per_page);
        require_once(BASE_PATH . '/template/app/diendan_khoahoc.php');
    }
}