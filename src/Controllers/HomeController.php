<?php

namespace Mac\Untitled10\Controllers;

use Mac\Untitled10\Viewer;

class HomeController
{
    public function index(): void
    {
        $page = 'home';
        $title = 'Home Page';
        $content = 'Home page';
        $data = [
            'Lera', 'Sophia', 'Oleksiy', 'Diana', 'Oleg'
        ];
        //echo 'Home Page';
        $view = new Viewer([
            'page' => $page,
            'title' => $title,
            'content' => $content,
            'data' => $data
        ]);
        $view->render();
    }
}
