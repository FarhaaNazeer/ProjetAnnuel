<?php 

namespace App\Controllers;

use App\Core\View;

class Security {

    public function login() {
        echo "page login";
        die();
        $view = new View('Security/login', 'back-template');
    }
}