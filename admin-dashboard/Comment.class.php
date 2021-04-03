<?php

namespace AdminDashboard;
require_once("Admin.class.php");
require_once(realpath(dirname(__FILE__) . "/DataBase.php"));

use DataBase\DataBase;

class Comment extends Admin
{

    public function index()
    {
        $db = new DataBase();
        $comments = $db->select('SELECT * FROM `comments` ORDER BY `id` DESC ;');
        foreach ($comments as $comment) {
            if ($comment['status'] == 'unseen')
                $db->update('comments', $comment['id'], ['status'], ['seen']);
        }
        $comments = $db->select('SELECT * FROM `comments` ORDER BY `id` DESC ;');
        require_once(realpath(dirname(__FILE__) . "/../template/admin/comments/index.php"));
    }

    public function show($id)
    {
        $db = new DataBase();
        $comment = $db->select("SELECT * FROM `comments` WHERE (`id` = ?); ", [$id])->fetch();
        require_once(realpath(dirname(__FILE__) . "/../template/admin/comments/show.php"));
    }

    public function approved($id)
    {
        $db = new DataBase();
        $comment = $db->select("SELECT * FROM `comments` WHERE (`id` = ?); ", [$id])->fetch();
        if ($comment['status'] == 'approved') {
            $db->update('comments', $id, ['status'], ['seen']);
        } else {
            $db->update('comments', $id, ['status'], ['approved']);
        }
        $this->redirectBack();
    }
}