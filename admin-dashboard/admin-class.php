<?php
namespace AdminDashboard;

class admin{
    protected function redirect($url){
        $protocol=stripos($_SERVER['SERVER_PROTOCOL'],$_SERVER['HTTP_HOST'])===true ? 'https://' : 'http://';
        header("location:".$protocol.$_SERVER['HTTP_HOST']."/php-dashboard".$url);
    }
    protected function redirectBack(){
        header("location:".$_SERVER['HTTP_REFERER']);
    }
}