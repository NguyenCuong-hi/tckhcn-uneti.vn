<?php

namespace Admin;

use Database\DataBase;
use Admin\Banner;

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

        if(isset($_FILES['file-upload'])){
            $up_file = $_FILES['file-upload'];
            $namefile      = $up_file['name'];
            $typefile      = $up_file['type'];
            $tmp_names  = $up_file['tmp_name'];
            $errors     = $up_file['error'];
            $sizes      = $up_file['size'];

            if ($typefile !== 'pdf') {
                $validFileName = str_replace('.vnd.openxmlformats-officedocument.wordprocessingml.document', '.docx', $namefile);
                $name_file = date("Y-m-d-H-i-s") . $validFileName;

            }
            else{
                $name_file = date("Y-m-d-H-i-s-")  . '.' . explode('/', $typefile)[1];
            }

            $temp_file = $tmp_names;
            $file_full_path = $filePath . $name_file;
            if(is_uploaded_file($temp_file))
            {
                if(move_uploaded_file($temp_file, $file_full_path))
                {
                    $file_path_db = $file_full_path;
                }
            }

        }

        $fields = ['title', 'summary', 'body', 'user_id', 'cat_id', 'published_at', 'author_name', 'file'];
        $values = [$_POST['title'], $_POST['summary'], $_POST['body'], 1 , $_POST['cat_id'], $_POST['published_at'], $_POST['author'], $file_path_db];
        $id_posts = $db->insert_post('posts',$fields, $values);


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
                        if(is_uploaded_file($imageTemp))
                        {
                            if(move_uploaded_file($imageTemp, $image_full_path))
                            {
                                if($numfiles <= 1){
                                    $fields_img = ['image', 'type' , 'id_post'];
                                    $value_img = [$image_full_path, 1 ,$id_posts];
                                }
                                else{
                                    $fields_img = ['image', 'id_post'];
                                    $value_img = [$image_full_path, $id_posts];
                                }
                                $banner = $db->insert('banners',$fields_img,$value_img);
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
                $request['published_at'] = date("Y-m-d H:i:s", (int)$realTimestamp);
                $db = new Database();
                if ($request['cat_id'] != null) {
                        if ($request['image']['tmp_name'] != null) {
                                $post = $db->select("SELECT * FROM posts WHERE id = ?", [$id])->fetch();
                                $this->removeImage($post['image']);
                                $request['image'] = $this->saveImage($request['image'], 'post-image');
                        } else {
                                unset($request['image']);
                        }
                        $request = array_merge($request, ['user_id' => 1]);
                        $db->update('posts', $id, array_keys($request), $request);
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
