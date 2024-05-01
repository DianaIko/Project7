<?php

namespace Mac\Untitled10\Controllers;

use Mac\Untitled10\Viewer;

class CatalogueController
{
    public function index(): void
    {
        $page = 'catalogue';
        $title = 'Catalogue Page';
        $content = 'Hello! Its catalogue page';
        $date = ['Product 1', 'Product 2', 'Product 3']; // Приклад даних про продукти

        $view = new Viewer([
            'page' => $page,
            'title' => $title,
            'content' => $content,
            'date' => $date
        ]);
        $view->render();
    }
}