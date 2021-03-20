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