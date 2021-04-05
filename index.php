<?php
require_once ("admin-dashboard/Category.class.php");
require_once ("admin-dashboard/Article.class.php");
require_once ("admin-dashboard/WebSetting.class.php");
require_once ("admin-dashboard/User.class.php");
require_once ("admin-dashboard/CreateDB.php");
require_once ("admin-dashboard/Menu.class.php");
require_once ("admin-dashboard/Auth.class.php");
require_once ("admin-dashboard/Home.class.php");
require_once ("admin-dashboard/Comment.class.php");
require_once ("admin-dashboard/Dashboard.class.php");
use AdminDashboard\Category;
use AdminDashboard\Dashboard;
use AdminDashboard\User;
use AdminDashboard\WebSetting;
use AdminDashboard\Article;
use AdminDashboard\Menu;
use AdminDashboard\Auth;
use AdminDashboard\Home;
use AdminDashboard\Comment;
use  DataBase\CreateDB;
//
//$createDB= new CreateDB();
//$createDB->run();

function uri($uri,$class,$method,$requestMethod='GET'){
  $values=array();
  $subURIs=explode('/',$uri);
  $request_uri=array_slice(explode('/',$_SERVER['REQUEST_URI']),2);
  if ($request_uri[0] == "" or $request_uri[0] == "/")
      $request_uri[0] = "home";

  $braek=false;
  if (sizeof($request_uri)== sizeof($subURIs) and $_SERVER['REQUEST_METHOD'] == $requestMethod){
      foreach (array_combine($subURIs,$request_uri) as $subURI => $request){
          if ($subURI[0]=="{" and $subURI[strlen($subURI) -1] == "}"){
              array_push($values,$request);
          }
          else{
              if ($subURI != $request){
                  $braek=true;
                  break;
          }

              }
      }

  }
  else $braek= true;

if (!$braek){
    $class = "AdminDashboard\\".$class;
    $object= new $class;
    if (sizeof($values) > 0)
        if ($requestMethod == 'POST')
            if (isset($_FILES)){
                $request = array_merge($_POST,$_FILES);
                $object->$method($request,implode(',' , $values));
            }
    else
        $object->$method($_POST,implode(',' , $values));
    else
        $object->$method(implode(',' , $values));
    else
        if ($requestMethod=='POST')
            if (isset($_FILES)){
                $request = array_merge($_POST,$_FILES);
                $object->$method($request);
            }
        else
            $object->$method($_POST);
        else
            $object->$method();
}
else{

}

}

//Dashboard Routing
uri('admin','Dashboard','index');

//categories Routing
uri('category','Category','index');
uri('category/show/{id}','Category','show');
uri('category/create','Category','create');
uri('category/store','Category','store','POST');
uri('category/edit/{id}','Category','edit');
uri('category/update/{id}','Category','update','POST');
uri('category/delete/{id}','Category','delete');

//articles Routing
uri('article','Article','index');
uri('article/show/{id}','Article','show');
uri('article/create','Article','create');
uri('article/store','Article','store','POST');
uri('article/edit/{id}','Article','edit');
uri('article/update/{id}','Article','update','POST');
uri('article/delete/{id}','Article','delete');

//menus Routing 
uri('menu','Menu','index');
uri('menu/show/{id}','Menu','show');
uri('menu/create','Menu','create');
uri('menu/store','Menu','store','POST');
uri('menu/edit/{id}','Menu','edit');
uri('menu/update/{id}','Menu','update','POST');
uri('menu/delete/{id}','Menu','delete');

//users Routing
uri('user','User','index');
uri('user/permission/{id}','User','permission');
uri('user/edit/{id}','User','edit');
uri('user/update/{id}','User','update','POST');
uri('user/delete/{id}','User','delete');

//web-setting Routing
uri('web-setting','WebSetting','index');
uri('web-setting/set','WebSetting','set');
uri('web-setting/store','WebSetting','store','POST');

//auth Routing
uri('login','Auth','login');
uri('check-login','Auth','checkLogin','POST');
uri('register','Auth','register');
uri('register/store','Auth','registerStore','POST');
uri('logout','Auth','logout');

//Home Routing
uri('home','Home','index');
uri('show-article/{id}','Home','show');
uri('show-category/{id}','Home','category');
uri('comment-store','Home','commentStore','POST');

//Comments Routing
uri('comment','Comment','index');
uri('comment/show/{id}','Comment','show');
uri('comment/approved/{id}','Comment','approved');







