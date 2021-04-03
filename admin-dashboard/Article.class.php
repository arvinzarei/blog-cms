<?php

namespace AdminDashboard;
require_once("Admin.class.php");
require_once(realpath(dirname(__FILE__) . "/DataBase.php"));

use DataBase\DataBase;

class Article extends Admin
{

    public function index()
    {
        $db = new DataBase();
        $articles = $db->select("SELECT * FROM `articles` ORDER BY `id` DESC ");
        require_once(realpath(dirname(__FILE__) . "/../template/admin/articles/index.php"));
    }

    public function show($id)
    {
        $db = new DataBase();
        $article = $db->select("SELECT * FROM `articles` WHERE (`id` = ?); ", [$id])->fetch();
        require_once(realpath(dirname(__FILE__) . "/../template/admin/articles/show.php"));
    }

    public function create()
    {
        $db = new DataBase();
        $categories = $db->select('SELECT * FROM `categories` ORDER BY `id` DESC ;');
        require_once(realpath(dirname(__FILE__) . "/../template/admin/articles/create.php"));
    }

    public function store($request)
    {
        $db = new DataBase();
        if ($request['cat_id'] != null) {
            $request['image'] = $this->saveImage($request['image'], 'article-image');
            if ($request['image']) {
                $request = array_merge($request, array('user_id' => $_SESSION['user']));
                $db->insert('articles', array_keys($request), $request);
                $this->redirect('article');
            } else
                $this->redirectBack();

        } else
            $this->redirectBack();
    }

    public function edit($id)
    {
        $db = new DataBase();
        $article = $db->select("SELECT * FROM `articles` WHERE (`id` = ?); ", [$id])->fetch();
        $categories = $db->select('SELECT * FROM `categories` ORDER BY `id` DESC ;');
        require_once(realpath(dirname(__FILE__) . "/../template/admin/articles/edit.php"));
    }

    public function update($request, $id)
    {
        $db = new DataBase();
        if ($request['cat_id'] != null) {
            if ($request['image']['tmp_name'] != null) {
                $article = $db->select("SELECT * FROM `articles` WHERE (`id` = ?); ", [$id])->fetch();
                $this->removeImage($article['image']);
                $request['image']=$this->saveImage($request['image'],'article-image');
            } else {
                unset($request['image']);
            }
            $request = array_merge($request, array('user_id' => $_SESSION['user']));
            $db->update('articles', $id, array_keys($request), $request);
            $this->redirect('article');
        }
        else {
                $this->redirectBack();
            }
    }

    public function delete($id)
    {
        //1 : remove Image
        $db= new DataBase();
        $article = $db->select("SELECT * FROM `articles` WHERE (`id` = ?); ", [$id])->fetch();
        $this->removeImage($article['image']);
        //2 : remove article
        $db->delete('articles',$id);
        $this->redirectBack();
    }

}