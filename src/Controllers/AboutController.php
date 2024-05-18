<?php

namespace Mac\Untitled10\Controllers;
use Mac\Untitled10\Viewer;
use Mac\Untitled10\Database;
use PDO;
class AboutController
{
    public function index(): void
    {
        $page = 'about';
        $title = 'About Page';
        $content = 'Hello! Its about page';
        $info = 'Text djksfjk.dgj.gbkj.dfgbk.jdfgbkj.dfzbgk.jz';

        $query = "SELECT * FROM ".Database::$table." ORDER BY age";
        $stmt = Database::executeQuery($query);

        $data = [];

        // Завантажуємо дані з бази даних
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }

        $view = new Viewer(
            [
                'page' => $page,
                'title' => $title,
                'content' => $content,
                'info' => $info
            ]
        );

        $view->render();
    }
    public function handleForm(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /');
            return;
        }

        $name = $this->filterPost('name');
        $age = $this->filterPost('age');

        if ($name === null || $age === null) {
            header('Location: /');
            return;
        }

        $query = "INSERT INTO ".Database::$table." (name, age) VALUES (:name, :age)";
        Database::executeQuery($query, ['name' => $name, 'age' => $age]);

        header('Location: /');
    }

    public function handleFormDelete(): void
    {
        $id = $_GET['id'] ?? null;

        $query = "DELETE FROM ".Database::$table." WHERE id = :id";
        Database::executeQuery($query, ['id' => $id]);

        header('Location: /');
    }

    private function filterPost(string $key): ?string
    {
        return isset($_POST[$key]) && is_string($_POST[$key]) ? htmlspecialchars($_POST[$key]) : null;
    }
}
