<?php
spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    $className = end($parts);
    $file = __DIR__ . '/' . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});