<?php
namespace Pure\Core;

use Pure\Core\Controllers\Home;

class Pure{
    public function __construct(){
        $home= new Home();
        $home->index();
    }
}
