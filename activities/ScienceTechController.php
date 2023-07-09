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

//        $data_exchage = [
//            'data' => $data,
//
//        ];
//        $setting = $db->select('SELECT * FROM websetting')->fetch();
//
//        $menus = $db->select('SELECT * FROM menus WHERE parent_id IS NULL')->fetchAll();
//
//        $topSelectedPosts = $db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts WHERE posts.selected = 2 ORDER BY created_at DESC LIMIT 0, 3')->fetchAll();
//
//        $breakingNews = $db->select('SELECT * FROM posts WHERE breaking_news = 2 ORDER BY created_at DESC LIMIT 0,1')->fetch();
//
//        $lastPosts = $db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts ORDER BY created_at DESC LIMIT 0, 6')->fetchAll();
//
//        $bodyBanner = $db->select('SELECT * FROM banners ORDER BY created_at DESC LIMIT 0,1')->fetch();
//        $sidebarBanner = $db->select('SELECT * FROM banners ORDER BY created_at DESC LIMIT 0,1')->fetch();
//
//        $popularPosts =$db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts  ORDER BY view DESC LIMIT 0, 3')->fetchAll();
//
//        $mostCommentsPosts =$db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts  ORDER BY comments_count DESC LIMIT 0, 4')->fetchAll();

        require_once (BASE_PATH . '/template/app/khoahoc_congnghe.php');
    }
}