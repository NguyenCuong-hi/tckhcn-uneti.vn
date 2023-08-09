<?php

namespace Admin;

use Database\DataBase;

class File
{
    public function index()
    {
        $db = new DataBase();
        $file = $db->select('SELECT * FROM file ORDER BY `id` DESC');
        require_once(BASE_PATH . '/template/admin/file/index.php');
    }

    public function create()
    {

        require_once(BASE_PATH . '/template/admin/file/create.php');

    }

    public function store($request)
    {
        $db = new DataBase();
        $request['file'] = $this->saveImage($request['file'], 'upload');
        if ($request['image']) {
            $db->insert('file', array_keys($request), $request);
            $this->redirect('admin/file');
        } else {
            $this->redirect('admin/file');
        }

    }

    public function edit($id)
    {
        $db = new DataBase();
        $banner = $db->select('SELECT * FROM file WHERE id = ?;', [$id])->fetch();
        require_once(BASE_PATH . '/template/admin/banners/edit.php');
    }

    public function update($request, $id)
    {
        $db = new DataBase();
        {
            if ($request['file']['tmp_name'] != null) {
                $file = $db->select('SELECT * FROM file WHERE id = ?;', [$id])->fetch();
                $this->removeImage($file['name']);
                $this->removeImage($file['file']);

                $request['file'] = $this->saveImage($request['file'], 'upload');
            } else {
                unset($request['file']);
            }
            $db->update('file', $id, array_keys($request), $request);
            $this->redirect('admin/banner');
        }


    }

    public function delete($id)
    {
        $db = new DataBase();

            $file = $db->select('SELECT * FROM file WHERE id = ?;', [$id])->fetch();
            $this->removeImage($file['file']);
            $db->delete('file', $id);
            $this->redirectBack();

    }
}