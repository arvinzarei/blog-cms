<?php
namespace AdminDashboard;

class Admin{
    protected function redirect($url){
        $prtocol= stripos($_SERVER['SERVER_PROTOCOL'],'https')=== true ? 'https://' : 'http://';
        header("Location: ".$prtocol.$_SERVER['HTTP_HOST']."/admin-panel/".$url);

    }


    protected function redirectBack(){
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}
