<?php

namespace Temas765\PasswordHasher\Hasher;

class Sha256Hasher implements HasherInterface
{
    public function hash(string $str): string
    {
        return hash('sha256', $str);
    }
}