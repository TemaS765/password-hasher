<?php

declare(strict_types=1);

namespace Temas765\PasswordHasher;

use Temas765\PasswordHasher\Hasher\HasherInterface;

class PasswordHasher
{
    public function __construct(private HasherInterface $hasher)
    {
    }

    public function hashPassword(string $password): string
    {
        return $this->hasher->hash($password);
    }
}