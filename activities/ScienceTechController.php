<?php

namespace App;

use Database\DataBase;

class ScienceTechController
{

    public function index(): void
    {
        require_once (BASE_PATH . '/template/app/khoahoc_congnghe.php');
    }
}