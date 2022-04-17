<?php

namespace App\Controllers;

use Src\Controller;

class MainController extends Controller
{
    public function main()
    {
        echo '<h1>Hello World</h1>';
    }

    public function home()
    {
        echo '<h1>Home</h1>';
    }
}
