<?php

namespace App\Controllers;

use App\Core\View;

use Dotenv\Dotenv;

class Security
{

    public function login()
    {
        // echo "page login";
        // die();
        $dotenv = Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
        $dotenv->load();

        $view = new View('Security/login', 'front-template');

        // $view = $view->renderHtml();
    }
}

