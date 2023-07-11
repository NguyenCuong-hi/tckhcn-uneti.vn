<?php

namespace App;

use Database\DataBase;

class SocioEconomicController
{
    public function show()
    {

        $db = new DataBase();
        $setting = $db->select('SELECT * FROM websetting')->fetch();

        $query = 'SELECT posts.*, author.fullname AS author_name , categories.name as cat_name, categories.code_name as code_name
                     FROM posts
                     INNER JOIN author ON posts.author_id = author.id
					 INNER JOIN categories ON posts.cat_id = categories.id
					 WHERE categories.type = 2';

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


        require_once(BASE_PATH . '/template/app/kinhte_xahoi.php');
    }

}