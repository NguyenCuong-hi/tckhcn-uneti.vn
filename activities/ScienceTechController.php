<?php

namespace App;

use Database\DataBase;

class ScienceTechController
{

    public function index()
    {
        $db = new DataBase();
        $setting = $db->select('SELECT * FROM websetting')->fetch();

        $data = $db->select('SELECT posts.*, author.fullname AS author_name , categories.name as cat_name, categories.code_name as code_name
                     FROM posts 
                     INNER JOIN author ON posts.author_id = author.id
					 INNER JOIN categories ON posts.cat_id = categories.id');


        $search = "";
        $search = '%' . $search . '%';

        $query = 'SELECT posts.*, author.fullname AS author_name, categories.name AS cat_name, categories.code_name AS code_name 
          FROM posts
          INNER JOIN author ON posts.author_id = author.id
          INNER JOIN categories ON posts.cat_id = categories.id 
          WHERE author.fullname LIKE :search
          OR posts.title LIKE :search';

        $result_search = $db->select($query, ['search' => $search]);

        require_once (BASE_PATH . '/template/app/khoahoc_congnghe.php');
    }
}