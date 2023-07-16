<?php

namespace App;

use Database\DataBase;

class Home{

        public function index()
        {
                $db = new DataBase();

                $setting = $db->select('SELECT * FROM websetting')->fetch();

                $menus = $db->select('SELECT * FROM menus WHERE parent_id IS NULL')->fetchAll();

                $topSelectedPosts = $db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts WHERE posts.selected = 2 ORDER BY created_at DESC LIMIT 0, 3')->fetchAll();

                $breakingNews = $db->select('SELECT * FROM posts WHERE breaking_news = 2 ORDER BY created_at DESC LIMIT 0,1')->fetch();

                $lastPosts = $db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts ORDER BY created_at DESC LIMIT 0, 6')->fetchAll();
                
                $bodyBanner = $db->select('SELECT * FROM banners ORDER BY created_at DESC LIMIT 0,1')->fetch();
                $sidebarBanner = $db->select('SELECT * FROM banners ORDER BY created_at DESC LIMIT 0,1')->fetch();

                $popularPosts =$db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts  ORDER BY view DESC LIMIT 0, 3')->fetchAll();

                $mostCommentsPosts =$db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts  ORDER BY comments_count DESC LIMIT 0, 4')->fetchAll();

                $posts = $db->select('SELECT posts.id, posts.cat_id , banners.image FROM posts  
                                          INNER JOIN categories ON posts.cat_id = categories.id 
                                          INNER JOIN banners ON posts.id = banners.id_post 
                                          WHERE (1=1) AND categories.type IN (1,2,3)
                                          AND banners.type = 1
                                          ORDER BY posts.created_at DESC ')->fetchAll();


                require_once (BASE_PATH . '/template/app/index.php');
        }


        public function show($id)
        {

                $db = new DataBase();


                $post =$db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts WHERE id = ?', [$id])->fetch();

                $comments = $db->select("SELECT *, (SELECT username FROM users WHERE users.id = comments.user_id) AS username FROM comments WHERE post_id = ? AND status = 'approved'", [$id])->fetchAll();



                $setting = $db->select('SELECT * FROM websetting')->fetch();

                $menus = $db->select('SELECT * FROM menus WHERE parent_id IS NULL')->fetchAll();


                
                $sidebarBanner = $db->select('SELECT * FROM banners ORDER BY created_at DESC LIMIT 0,1')->fetch();

                $popularPosts =$db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts  ORDER BY view DESC LIMIT 0, 3')->fetchAll();

                $mostCommentsPosts =$db->select('SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username, (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts  ORDER BY comments_count DESC LIMIT 0, 4')->fetchAll();

                require_once (BASE_PATH . '/template/app/show-post.php');

        }

        public function commentStore($request){
               
                if(isset($_SESSION['user']))
                {
                        if($_SESSION['user'] != null)
                        {
                                $db = new DataBase();
                                $db->insert('comments', ['user_id', 'post_id', 'comment'], [$_SESSION['user'], $request['post_id'], $request['comment']]);
                                $this->redirectBack();
                        }
                        else{
                                $this->redirectBack();
                        }
                }
                else{
                        $this->redirectBack();
                }

        }



        public function category($id)
        {
            $db = new DataBase();
            $category = $db->select("SELECT * FROM `categories` WHERE `id` = ? ORDER BY `id` DESC ;", [$id])->fetch();

            $topSelectedPosts = $db->select("SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username , (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category  FROM posts where posts.selected = 2 ORDER BY `created_at` DESC LIMIT 0,1 ;")->fetchAll();
    
            
            $categoryPosts = $db->select("SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username , (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts WHERE cat_id = ?  ORDER BY `created_at` DESC LIMIT 0,6 ;", [$id])->fetchAll();
    
            $popularPosts = $db->select("SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username , (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts  ORDER BY `view` DESC LIMIT 0,3 ;")->fetchAll();
    
            $breakingNews = $db->select("SELECT * FROM posts WHERE breaking_news = 2 ORDER BY `created_at` DESC LIMIT 0,1 ;")->fetch();
    
            $mostCommentsPosts = $db->select("SELECT posts.*, (SELECT COUNT(*) FROM comments WHERE comments.post_id = posts.id) AS comments_count, (SELECT username FROM users WHERE users.id = posts.user_id) AS username  , (SELECT name FROM categories WHERE categories.id = posts.cat_id) AS category FROM posts  ORDER BY `comments_count` DESC LIMIT 0,4 ;")->fetchAll();
            
            $menus = $db->select('SELECT *, (SELECT COUNT(*) FROM `menus` AS `submenus` WHERE `submenus`.`parent_id` = `menus`.`id`  ) as `submenu_count`  FROM `menus` WHERE `parent_id` IS NULL ;')->fetchAll();

            $setting= $db->select("SELECT * FROM `websetting`;")->fetch();
    
            $sidebarBanner= $db->select("SELECT * FROM `banners` LIMIT 0,1;")->fetch();
            $bodyBanner= $db->select("SELECT * FROM `banners` ORDER BY created_at DESC LIMIT 0,1;")->fetch();
            $get_image_gioithieu = $db->select("SELECT * FROM `banners` WHERE id = 15 ");
            $get_image_thongbao = $db->select('SELECT * FROM `banners` WHERE id = 18 AND banners.type = 2;')->fetch();
            $get_image_ukien = $db->select('SELECT * FROM `banners` WHERE id = 20 AND banners.type = 2;')->fetch();

            require_once (BASE_PATH . "/template/app/show-category.php");
        }


        protected function redirectBack(){
                header("Location: " . $_SERVER['HTTP_REFERER']);
                exit;
        }

}