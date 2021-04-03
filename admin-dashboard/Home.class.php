<?php
namespace AdminDashboard;
require_once (realpath(dirname(__FILE__) . "/DataBase.php"));
use DataBase\DataBase;

class Home{

    public function index()
    {
        $db = new DataBase();
    //Query for Select 6 articles that have a number of comments and auther
        $articles = $db->select("SELECT articles.*, 
            (SELECT COUNT(*) FROM comments WHERE comments.article_id = articles.id) AS comments_count, 
            (SELECT username FROM users WHERE users.id = articles.user_id) AS username 
            FROM articles  ORDER BY `created_at` DESC LIMIT 0,6 ;")->fetchAll();

    //Query for Select 4 popularArticles 
        $popularArticles = $db->select("SELECT articles.*, 
            (SELECT COUNT(*) FROM comments WHERE comments.article_id = articles.id) AS comments_count, 
            (SELECT username FROM users WHERE users.id = articles.user_id) AS username 
            FROM articles  ORDER BY `view` DESC LIMIT 0,4 ;")->fetchAll();

        $sidebarPopularArticles = $popularArticles;

    //Query for Select All Categories      
        $categories = $db->select('SELECT * FROM `categories` ORDER BY `id` DESC ;');

    //Query for Select All Menus and count of subMenus
        $menus = $db->select('SELECT *, 
            (SELECT COUNT(*) FROM `menus` AS `submenus` WHERE `submenus`.`parent_id` = `menus`.`id`  ) as `submenu_count`  
            FROM `menus` WHERE `parent_id` IS NULL ;')->fetchAll();
  
    //Query for Select All subMenus
        $submenus = $db->select('SELECT * FROM `menus` WHERE `parent_id` IS NOT NULL ;')->fetchAll();

    //Query for Select All WebSetting
        $setting= $db->select("SELECT * FROM `websetting`;")->fetch();

        require_once (realpath(dirname(__FILE__) . "/../template/app/index.php")); 
    }

    public function show($id)
    {
//Query for select and show Article,author,comment count,comment
        $db = new DataBase();
        $article=$db->select("select * FROM `articles` WHERE `id` = ? ORDER BY `id` DESC ;",[$id])->fetch();
        $username=$db->select("select * FROM `users` WHERE `id` = ? ;",[$article['user_id']])->fetch();
        $commentsCount=$db->select("select COUNT(*) FROM `comments` WHERE `article_id` = ?;",[$id])->fetch();
        $comments=$db->select("select *,(select `username` FROM `users` WHERE `users`.`id` = `comments`.`user_id`) as `username` 
        FROM `comments` WHERE `article_id` = ? and `status` = 'approved' ORDER BY `created_at` DESC ;",[$id])->fetchAll();
//query for Increase Views
        $db->update('articles',$id,['view'],[$article['view']+1]);

//Query for Select 4 popularArticles
        $popularArticles = $db->select("SELECT articles.*, 
            (SELECT COUNT(*) FROM comments WHERE comments.article_id = articles.id) AS comments_count, 
            (SELECT username FROM users WHERE users.id = articles.user_id) AS username 
            FROM articles  ORDER BY `view` DESC LIMIT 0,4 ;")->fetchAll();

        $sidebarPopularArticles = $popularArticles;

//Query for Select All Categories
        $categories = $db->select('SELECT * FROM `categories` ORDER BY `id` DESC ;');

//Query for Select All Menus and count of subMenus
        $menus = $db->select('SELECT *, 
            (SELECT COUNT(*) FROM `menus` AS `submenus` WHERE `submenus`.`parent_id` = `menus`.`id`  ) as `submenu_count`  
            FROM `menus` WHERE `parent_id` IS NULL ;')->fetchAll();

//Query for Select All subMenus
        $submenus = $db->select('SELECT * FROM `menus` WHERE `parent_id` IS NOT NULL ;')->fetchAll();

 //Query for Select All WebSetting
        $setting= $db->select("SELECT * FROM `websetting`;")->fetch();

        require_once (realpath(dirname(__FILE__) . "/../template/app/show-article.php"));
    }

    public function category($id)
    {
        
    }

    public function commentStore($request)
    {
        
    }

    protected function redirectback()
    {
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

}
?>