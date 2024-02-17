<?php

declare(strict_types=1);

namespace Temas765\PasswordHasher\Hasher;

class Md5Hasher implements HasherInterface
{
    public function hash(string $str): string
    {
        return md5($str);
    }
}