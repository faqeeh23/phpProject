<?php

declare(strict_type=1);

namespace App\Core ;

Class Request 
{
    public function method(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function uri(): string
    {
        return parse_url(
            $_SERVER['REQUEST_URI'],
            PHP_URL_PATH
        );
    }

    public function query(string $key, mixed $default = null): mixed
    {
        return $_GET[key] ?? $default;
    }

    public function input(string $key, mixed $default = null): mixed {
        return $_POST[$key] ?? $default;
    }

    public function all(): array 
    {
        return $_POST;
    }
}

//  point 17 in chatGPT