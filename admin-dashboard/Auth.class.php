<?php

namespace AdminDashboard;

require_once(realpath(dirname(__FILE__) . "/DataBase.php"));

use DataBase\DataBase;

class Auth
{

//Start Construct Function--------
    function __construct(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
    }

//Start Login Function--------
    public function login()
    {
        require_once(realpath(dirname(__FILE__) . "/../template/auth/login.php"));
    }

//Start Check-Login Function--------
    public function checkLogin($request)
    {
        if (empty($request['email']) || empty($request['password'])) {
            $this->redirectBack();
        } else {
            $db = new DataBase();
            $user = $db->select("SELECT * FROM `users` WHERE (`email`= ?);", [$request['email']])->fetch();

            if ($user != null) {
                if (password_verify($request['password'], $user['password'])) {
                    $_SESSION['user'] = $user['id'];
                    $this->redirect('admin');
                } else {
                    $this->redirectBack();
                }
            } else {
                $this->redirectBack();
            }
        }
    }

 //Start Register Function--------   
    public function register()
    {
        require_once(realpath(dirname(__FILE__) . "/../template/auth/register.php"));
    }

//Start Register-Store Function--------
    public function registerStore($request)
    {

        if (empty($request['email']) || empty($request['password'])) {
            $this->redirectBack();
        } else if (strlen($request['password'] < 8)) {
            $this->redirectBack();
        } else if (!filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
            $this->redirectBack();
        } else {
            $db = new DataBase();
            $user = $db->select("SELECT * FROM `users` WHERE (`email`= ?);", [$request['email']])->fetch();
            if($user != NULL){
                $user->redirectBack();
            }
            else{
                $request['password'] = $this->hash($request['password']);
                $db->insert('users', array_keys($request), $request);
                $this->redirect('login');
            }
        }
    }

//Start LogOut Function--------
    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
            session_destroy();
        }
        $this->redirectBack();
    }

//Start Check-Admin Function--------
    public function checkAdmin()
    {
        if (isset($_SESSION['user'])) {
            $db = new DataBase();
            $user = $db->select("SELECT * FROM `users` WHERE `id`= ? ;", [$_SESSION['user']])->fetch();
            if ($user != null) {
                if ($user['permission'] != 'admin') {
                    $this->redirect('home');
                }
            } else {
                $this->redirect('home');
            }
        } else {
            $this->redirect('home');
        }
    }

//Start Redirect Function--------
    protected function redirect($url)
    {
        $prtocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
        header("Location: " . $prtocol . $_SERVER['HTTP_HOST'] . "/admin-panel/" . $url);
    }

//Start Redirect-Back Function--------
    protected function redirectBack()
    {
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }

//Start Hashing Function--------
    public function hash($string)
    {
        $hashString=password_hash($string,PASSWORD_DEFAULT);
        return $hashString;
    }
}
