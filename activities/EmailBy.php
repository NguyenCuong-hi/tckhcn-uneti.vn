<?php

namespace App;

class EmailBy
{
    public function index(){
        require_once(BASE_PATH . '/template/app/sent-email.php');
    }

}