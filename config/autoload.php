<?php

spl_autoload_register(function ($class) {
    $dirs = [
        __DIR__ . "/../controllers/",
        __DIR__ . "/../controllers/auth/",
        __DIR__ . "/../controllers/contacts/",
        __DIR__ . "/../controllers/companies/",
        __DIR__ . "/../models/",
    ];

    foreach ($dirs as $dir) {
        $file = $dir . $class . ".php";
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});
