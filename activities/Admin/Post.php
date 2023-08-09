<?php

namespace Admin;

use Database\DataBase;
use Admin\Banner;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Writer\HTML;
use PhpOffice\PhpWord\Writer\PDF\DomPDF;

class Post extends Admin
{

    public function index()
    {
        $db = new DataBase();
        $posts = $db->select("SELECT * FROM posts");
        require_once BASE_PATH . '/template/admin/post/index.php';
    }

    public function search()
    {
        $db = new DataBase();
        $sql = 'SELECT * FROM posts WHERE ';
        // $keywords = null;
        if(isset($_GET['keyword'])){
            $sql .= ' posts.title LIKE ?';
            $params[] = '%' . $_GET['keyword'] . '%';
        }
        
        $posts = $db->select($sql, $params);
        require_once (BASE_PATH . '/template/admin/post/index.php');
      
    }

    public function create()
    {
        $db = new DataBase();
        $categories = $db->select('SELECT * FROM categories');
        require_once BASE_PATH . '/template/admin/post/create.php';
    }

    public function store($request)
    {
        $realTimestamp = substr($request['published_at'], 0, 10);
        $request['published_at'] = date("Y-m-d H:i:s", (int) $realTimestamp);

        $imagePath = './public/' . 'post-image' . '/';
        $filePath =  './public/upload'. '/';
        $file_path_db = '';
        $db = new DataBase();


        $fields = ['title', 'summary', 'body', 'user_id', 'cat_id', 'published_at', 'author_name'];
        $values = [$_POST['title'], $_POST['summary'], $_POST['body'], 1 , $_POST['cat_id'], $_POST['published_at'], $_POST['author']];
        $id_posts = $db->insert_post('posts',$fields, $values);



        if(isset($_FILES['file_upload'])){
            $up_file_ = $_FILES['file_upload'];
            $name_file_item      = $up_file_['name'];
            $type_file_item      = $up_file_['type'];
            $tmp_names_file  = $up_file_['tmp_name'];
            $errors     = $up_file_['error'];
            $sizes      = $up_file_['size'];

            $numberItems = count($name_file_item);
            $numItem = 0;

            for ($i = 0; $i < $numberItems; $i++) {
                if ($errors[$i] == 0) {
                    $numItem++;

                    $timestamp_micro = microtime(true);
                    $timestamp_micro = str_replace('.', '', $timestamp_micro);
                    $extension = explode('/', $type_file_item[$i])[1];
                    $file_name = $name_file_item[$i];
                    $file_upload_name = date("Y-m-d-H-i-s-", time()) . $timestamp_micro . '.' . $extension;
                    if ($extension !== 'pdf') {
                        $validFileName = str_replace('.vnd.openxmlformats-officedocument.wordprocessingml.document', '.docx', $file_upload_name);
                        $name_file = date("Y-m-d-H-i-s-", time()) . $validFileName;

                    }
                    else{
                        $name_file = date("Y-m-d-H-i-s-")  . $timestamp_micro .'.' . explode('/', $type_file_item[$i])[1];
                    }

                    $temp_file = $tmp_names_file[$i];
                    $file_full_path = $filePath . $name_file;
                    if(is_uploaded_file($temp_file))
                    {
                        if(move_uploaded_file($temp_file, $file_full_path))
                        {
                            $file_path_db = $file_full_path;
                            $fields_file = ['file', 'id_post', 'cat_id', 'name'];
                            $value_file = [$file_full_path, $id_posts, $_POST['cat_id'], $file_name];
                            $ufile = $db->insert('file',$fields_file,$value_file);
                        }
                    }

                }
            }
        }


        if ($request['cat_id'] != null) {
            if(isset($_FILES['image_upload'])){
                $files = $_FILES['image_upload'];
                $names      = $files['name'];
                $types      = $files['type'];
                $tmp_names  = $files['tmp_name'];
                $errors     = $files['error'];
                $sizes      = $files['size'];

                $numitems = count($names);
                $numfiles = 0;

                for ($i = 0; $i < $numitems; $i++) {
                    if ($errors[$i] == 0) {
                        $numfiles++;

                        $micro_timestamp = microtime(true);
                        $micro_timestamp = str_replace('.', '', $micro_timestamp);
                        $extension = explode('/', $types[$i])[1];
                        $imageName = date("Y-m-d-H-i-s-", time()) . $micro_timestamp . '.' . $extension;

                        $imageTemp = $tmp_names[$i];
                        $image_full_path = $imagePath . $imageName;

                        if($numfiles !== 1){
                            $fields_img = ['image', 'type' , 'id_post'];
                            $value_img = [$image_full_path, 1 ,$id_posts];
                            $banner = $db->insert('banners',$fields_img,$value_img);
                        }
                        else{
                            $fields_img = ['image', 'id_post'];
                            $value_img = [$image_full_path, $id_posts];
                            $banner = $db->insert('banners',$fields_img,$value_img);
                        }


                        if(is_uploaded_file($imageTemp))
                        {
                            if(move_uploaded_file($imageTemp, $image_full_path))
                            {

                            }
                        }
                    }
                }
                $this->redirect('admin/post');
            }
        } else {
            $this->redirect('admin/post');
        }
    }

        public function edit($id)
        {
                $db = new Database();
                $post = $db->select("SELECT * FROM posts WHERE id = ?", [$id])->fetch();
                $categories = $db->select('SELECT * FROM categories');
                require_once(BASE_PATH . '/template/admin/post/edit.php');
        }

        public function update($request, $id)
        {
            $realTimestamp = substr($request['published_at'], 0, 10);
            $request['published_at'] = date("Y-m-d H:i:s", (int) $realTimestamp);

            $imagePath = './public/' . 'post-image' . '/';
            $filePath =  './public/upload'. '/';
            $file_path_db = '';
            $db = new DataBase();


            $fields = ['title', 'summary', 'body', 'user_id', 'cat_id', 'published_at', 'author_name'];
            $values = [$_POST['title'], $_POST['summary'], $_POST['body'], 1 , $_POST['cat_id'], $_POST['published_at'], $_POST['author']];
            $id_posts = $db->update('posts',$id,$fields, $values);



            if(isset($_FILES['file_upload'])){
                $up_file_ = $_FILES['file_upload'];
                $name_file_item      = $up_file_['name'];
                $type_file_item      = $up_file_['type'];
                $tmp_names_file  = $up_file_['tmp_name'];
                $errors     = $up_file_['error'];
                $sizes      = $up_file_['size'];

                $numberItems = count($name_file_item);
                $numItem = 0;

                for ($i = 0; $i < $numberItems; $i++) {
                    if ($errors[$i] == 0) {
                        $numItem++;

                        $timestamp_micro = microtime(true);
                        $timestamp_micro = str_replace('.', '', $timestamp_micro);
                        $extension = explode('/', $type_file_item[$i])[1];
                        $file_upload_name = date("Y-m-d-H-i-s-", time()) . $timestamp_micro . '.' . $extension;
                        if ($extension !== 'pdf') {
                            $validFileName = str_replace('.vnd.openxmlformats-officedocument.wordprocessingml.document', '.docx', $file_upload_name);
                            $name_file = date("Y-m-d-H-i-s-", time()) . $validFileName;
                        }
                        else{
                            $name_file = date("Y-m-d-H-i-s-")  . $timestamp_micro .'.' . explode('/', $type_file_item[$i])[1];
                        }

                        $temp_file = $tmp_names_file[$i];
                        $file_full_path = $filePath . $name_file;
                        if(is_uploaded_file($temp_file))
                        {
                            if(move_uploaded_file($temp_file, $file_full_path))
                            {
                                $file_path_db = $file_full_path;
                                $fields_file = ['file', 'id_post', 'cat_id', 'name'];
                                $value_file = [$file_full_path, $id_posts, $_POST['cat_id'], $name_file_item];
                                $ufile = $db->update_by_id_post('file',$id,$fields_file,$value_file);
                            }
                        }

                    }
                }
            }


            if ($request['cat_id'] != null) {
                if(isset($_FILES['image_upload'])){
                    $files = $_FILES['image_upload'];
                    $names      = $files['name'];
                    $types      = $files['type'];
                    $tmp_names  = $files['tmp_name'];
                    $errors     = $files['error'];
                    $sizes      = $files['size'];

                    $numitems = count($names);
                    $numfiles = 0;

                    for ($i = 0; $i < $numitems; $i++) {
                        if ($errors[$i] == 0) {
                            $numfiles++;

                            $micro_timestamp = microtime(true);
                            $micro_timestamp = str_replace('.', '', $micro_timestamp);
                            $extension = explode('/', $types[$i])[1];
                            $imageName = date("Y-m-d-H-i-s-", time()) . $micro_timestamp . '.' . $extension;

                            $imageTemp = $tmp_names[$i];
                            $image_full_path = $imagePath . $imageName;

                            if($numfiles !== 1){
                                $fields_img = ['image', 'type' , 'id_post'];
                                $value_img = [$image_full_path, 1 ,$id_posts];
                                $banner = $db->update_by_id_post('banners',$id,$fields_img,$value_img);
                            }
                            else{
                                $fields_img = ['image', 'id_post'];
                                $value_img = [$image_full_path, $id_posts];
                                $banner = $db->update_by_id_post('banners',$fields_img,$value_img);
                            }


                            if(is_uploaded_file($imageTemp))
                            {
                                if(move_uploaded_file($imageTemp, $image_full_path))
                                {

                                }
                            }
                        }
                    }
                    $this->redirect('admin/post');
                }
            } else {
                $this->redirect('admin/post');
            }
        }

    public function delete($id)
    {
        $db = new DataBase();
        $post = $db->select("SELECT * FROM posts WHERE id = ?", [$id])->fetch();
        $this->removeImage($post['image']);
        $db->delete('posts', $id);
        $this->redirectBack();
    }

    public function breakingNews($id)
    {
        $db = new DataBase();
        $post = $db->select("SELECT * FROM posts WHERE id = ?", [$id])->fetch();
        if (empty($post)) {
            $this->redirectBack();
        }

        if ($post['breaking_news'] == 1) {
            $db->update('posts', $id, ['breaking_news'], [2]);
        } else {
            $db->update('posts', $id, ['breaking_news'], [1]);
        }
        $this->redirectBack();
    }

    public function selected($id)
    {
        $db = new DataBase();
        $post = $db->select("SELECT * FROM posts WHERE id = ?", [$id])->fetch();
        if (empty($post)) {
            $this->redirectBack();
        }

        if ($post['selected'] == 1) {
            $db->update('posts', $id, ['selected'], [2]);
        } else {
            $db->update('posts', $id, ['selected'], [1]);
        }
        $this->redirectBack();
    }


    public function PostFileWord(){

    }

}
