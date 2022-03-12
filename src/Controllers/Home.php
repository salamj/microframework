<?php

namespace Pure\Core\Controllers;

use Pure\Core\Models\HomeModel;

class Home{
    public function index(){
        $home = new HomeModel();

        print_r($home->home());
    }
}