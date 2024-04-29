<?php

function conectardb()
{
    $db = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_NAME']);
    if (!$db) {
        echo 'no se pudo conectar';
        exit;
    };

    return $db;
};
