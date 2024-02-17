# Хэшер паролей

Хэшер для хэширования паролей

## Требования

- PHP 8.0

## Установка

```bash
composer require temas765/password-hasher
```

##  Использование

```php
<?php

$passwordHasher = new PasswordHasher(new Md5Hasher());
echo "Password hash: {$passwordHasher->hashPassword('secret')}" // Password hash: 5ebe2294ecd0e0f08eab7690d2a6ee69 
```

