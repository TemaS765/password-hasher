# Хэшер паролей

Хэшер для хэширования паролей

## Требования

- PHP 7.0

## Установка

```bash
composer require temas765/password-hasher
```

##  Использование

```php
<?php

$hasher = new Hasher();
echo "Hash: {$hasher->hash('12345')}" //hash
```

