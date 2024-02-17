<?php

declare(strict_types=1);

namespace Temas765\PasswordHasher\Hasher;

interface HasherInterface
{
    public function hash(string $str): string;
}