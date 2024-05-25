<?php

namespace Mac\Untitled10;

class AuthMiddleware
{
    /**
     * @param callable $handler
     * @param array<string> $vars
     */
    public function handle(callable $handler, array $vars): void
    {
        if (!empty($_SESSION['login']) && $_SESSION['login'] === 'User') {
            call_user_func($handler, $vars);
        } else {
            header('Location: /login'); // Перенаправити на сторінку входу
            exit;
        }
    }
}