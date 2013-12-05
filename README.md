ClassLoader
===========

簡単なクラスローダー

使い方

```php:bootstrap.php
<?php
require_once __DIR__ . '/ClassLoader.php';
$loader = new ClassLoader();
$loader->register_dir(__DIR__ . 'hoge');
$loader->register();
```
