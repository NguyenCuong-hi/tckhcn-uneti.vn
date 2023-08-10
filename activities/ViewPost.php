<?php

namespace App;

use Database\DataBase;

class ViewPost
{
    public function index($id){
        $db = new DataBase();
        $result_file = $db->select('SELECT * FROM file WHERE id = ? ', [$id])->fetch();

        $id_post = [$result_file['id_post']];
        $post = $db->select('SELECT * FROM posts WHERE id = ?', $id_post)->fetch();

        require_once(BASE_PATH . '/template/app/show_post.php');
    }

}