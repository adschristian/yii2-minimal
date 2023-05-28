<?php

function env(string $key, $default = null)
{
    return $_ENV[$key] ?? $default;
}

function generateId(): string
{
    $random = (string) rand();
    $uniqid = uniqid($random, true);

    return md5($uniqid);
}
